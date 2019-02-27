<?php


/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\exception;

use app\common\base\BaseException;


class UserExistException extends BaseException {

    public $code = 20000;
    public $msg = "用户已存在";
}