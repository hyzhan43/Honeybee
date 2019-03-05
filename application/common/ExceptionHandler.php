<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common;


use app\common\base\BaseException;
use Exception;
use Firebase\JWT\ExpiredException;
use InvalidArgumentException;
use think\exception\Handle;
use think\Log;
use UnexpectedValueException;

class ExceptionHandler extends Handle {

    // http 状态码
    private $httpCode = 200;

    // 自定义的错误码
    private $code;
    private $msg;

    /**
     * 全局异常处理(渲染 所有 Exception)
     */
    public function render(\Exception $e) {

        // 如果是自定义异常
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
        } else if ($e instanceof InvalidArgumentException) {
            // 传递参数异常 (缺少对应的参数)
            $this->code = -1;
            $this->msg = '参数异常';
        } else if ($e instanceof ExpiredException) {
            // JWT 解析错误， token 过期/失效
            $this->code = -1;
            $this->msg = 'token已过期';
        } else if ($e instanceof UnexpectedValueException) {
            // JWT 解析错误， token 错误值
            $this->code = -1;
            $this->msg = 'token 错误';
        } else {
            $this->httpCode = 500;
            $this->code = 9999;
            $this->msg = '服务器内部错误, 不告诉你';

            // 记录日志
            $this->recordErrorLog($e);
        }

        return Response::fail($this->code, $this->msg, $this->httpCode);
    }

    // 记录日志
    public function recordErrorLog(\Exception $e){
        Log::init([
            'type' => 'File',
            'path' => LOG_PATH,
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}