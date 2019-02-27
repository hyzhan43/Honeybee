<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\api\validate;



use app\common\base\BaseValidate;

class RegisterValidate extends BaseValidate {

    protected $rule = [
        'account' => 'require|min:6',
        'password' => 'require|min:6'
    ];
}