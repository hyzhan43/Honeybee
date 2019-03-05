<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\api\validate;


use app\common\base\BaseValidate;

class LoginValidate extends BaseValidate {

    protected $rule = [
        'account' => 'require|isNotEmpty',
        'password' => 'require|isNotEmpty',
    ];

    protected $message = [
        'account' => "account 不能为空",
        'password' => "password 不能为空",
    ];
}