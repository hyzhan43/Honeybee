<?php


/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\exception;

use app\common\base\BaseException;


class UserNotExistException extends BaseException {

    public $code = 20002;
    public $msg = "用户不存在";
}