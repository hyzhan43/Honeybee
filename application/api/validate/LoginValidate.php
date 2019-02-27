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
        'account' => 'require',
        'password' => 'require',
    ];

}