<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\api\model;


use app\common\base\BaseModel;

class User extends BaseModel {

    public function findUserByAccount($account) {
        return self::where('account', '=', $account)->find();
    }
}