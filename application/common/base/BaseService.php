<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\common\base;
use app\common\exception\TokenEmptyException;
use app\common\Utils\JWTUtil;
use think\Request;

class BaseService {

    public function getCurrentUid(){

        $token = Request::instance()->header('token');

        if (empty($token))
            throw new TokenEmptyException();

        // token 解密
        $data = JWTUtil::decode($token);

        // 获取当前用户 id
        return $data->uid;
    }
}