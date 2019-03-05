<?php


/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\exception;

use app\common\base\BaseException;

class TokenEmptyException extends BaseException {

    public $code = 10001;
    public $msg = "Token 为空";
}