<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\common\exception;


use app\common\base\BaseException;

class AccountOrPasswordException extends BaseException {

    public $code = 20001;
    public $msg = "账号或密码错误";
}