<?php
/**
 * author: HyZhan
 * date:   2019/3/5
 * desc:   TODO
 */

namespace app\api\validate;


use app\common\base\BaseValidate;

class MemoAddValidate extends BaseValidate {

    protected $rule = [
        'title' => 'require',
    ];
}