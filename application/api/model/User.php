<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\api\model;


use app\common\base\BaseModel;

class User extends BaseModel {

    /**
     * @param $account
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function findUserByAccount($account) {
        return self::where('account', '=', $account)->find();
    }
}