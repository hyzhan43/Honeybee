<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\base;


use think\Exception;
use Throwable;

class BaseException extends Exception {

    // 错误状态码
    public $code = 0;

    public $msg = '未知错误, 服务器咋啦？';

    public function __construct($params = []) {

        if (!is_array($params)) {
            // 如果不是数组返回
            return;
        }

        if (array_key_exists('ErrorCode', $params)) {
            $this->code = $params['ErrorCode'];
        }

        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
    }
}