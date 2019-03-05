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

    // Memo 类型
    const TYPE_NONE = 0;
    const TYPE_WORK = 1;
    const TYPE_STUDY = 2;
    const TYPE_PLAY = 3;

    // Memo 级别
    const LEVEL_NONE = 0;   // 普通
    const LEVEL_MORE = 1;   // 一般
    const LEVEL_MOST = 2;   // 重要
}