<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   通用返回基类
 */

namespace app\common;

class Response {

    public static function success($msg, $data = null) {
        return self::build(1, $msg, $data, 200);
    }

    public static function fail($code, $msg, $httpCode) {
        return self::build($code, $msg, null, $httpCode);
    }

    public static function build($code, $msg, $data, $httpCode) {

        $result = [
            'ErrorCode' => $code,
            'msg' => $msg,
            'data' => $data
        ];

        return json($result, $httpCode);
    }
}