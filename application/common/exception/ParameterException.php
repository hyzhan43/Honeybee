<?php


/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\exception;

use app\common\base\BaseException;


class ParameterException extends BaseException {

    public $code = 10000;
    public $msg = "参数错误";
}