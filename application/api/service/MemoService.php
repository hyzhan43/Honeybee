<?php
/**
 * author: HyZhan
 * date:   2019/3/5
 * desc:   TODO
 */

namespace app\api\service;


use app\api\model\Memo as MemoModel;
use app\common\base\BaseService;
use think\Db;

class MemoService extends BaseService {

    public function add($params) {

        // 开启事务
        Db::transaction(function () use ($params) {
            $memoModel = new MemoModel($params);
            $memoModel['user_id'] = $this->getCurrentUid();

            $memoModel->save();
        });
    }
}