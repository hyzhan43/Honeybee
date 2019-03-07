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
            // 把传递过来的参数赋值到数据库对应字段
            $memoModel = new MemoModel($params);
            $memoModel['user_id'] = $this->getCurrentUid();

            $memoModel->save();
        });
    }

    public function getMemoList($page) {

        $memoModel = new MemoModel();
        // 根据页码查询当前用户的数据
        $list = $memoModel->getMemoList($this->getCurrentUid(), $page);

        return $list;
    }
}