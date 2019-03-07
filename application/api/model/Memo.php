<?php
/**
 * author: HyZhan
 * date:   2019/3/5
 * desc:   TODO
 */

namespace app\api\model;


use app\common\base\BaseModel;

class Memo extends BaseModel {

    // 开启自动存储时间
    protected $autoWriteTimestamp = 'datetime';

    // Memo 状态
    const STATUS_NONE = 0;      //未完成
    const STATUS_FINISH = 1;    // 已完成

    // Memo 类型
    const TYPE_NONE = 0;        // 默认
    const TYPE_WORK = 1;        // 工作
    const TYPE_STUDY = 2;       // 学习
    const TYPE_PLAY = 3;        // 娱乐

    // Memo 级别
    const LEVEL_NONE = 0;   // 普通
    const LEVEL_MORE = 1;   // 一般
    const LEVEL_MOST = 2;   // 重要


    public function getMemoList($userId, $page, $size = 10) {
        return self::where('state', self::STATUS_NONE)
            ->where('user_id', $userId)
            ->paginate($size, false, ['page' => $page]);
    }
}