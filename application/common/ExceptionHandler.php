<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common;


use app\common\base\BaseException;
use Exception;
use InvalidArgumentException;
use think\exception\Handle;

class ExceptionHandler extends Handle {

    // http 状态码
    private $httpCode = 200;

    // 自定义的错误码
    private $code;
    private $msg;

    /**
     * 全局异常处理(渲染 所有 Exception)
     * @param Exception $e
     * @return \think\Response|\think\response\Json
     */
    public function render(Exception $e) {

        // 如果是自定义异常
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
        } else if ($e instanceof InvalidArgumentException) {
            // 传递参数异常 (缺少对应的参数)
            $this->code = -1;
            $this->msg = $e->getMessage();
        } else {
            $this->httpCode = 500;
            $this->code = 9999;
            $this->msg = config('app_debug') ? $e->getMessage() : '服务器内部错误, 不告诉你';
        }

        return Response::fail($this->code, $this->msg, $this->httpCode);
    }
}