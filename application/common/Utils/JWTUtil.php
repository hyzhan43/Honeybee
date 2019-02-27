<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\common\Utils;


use Firebase\JWT\JWT;

class JWTUtil {

    /**
     * 进行 JWT 加密,
     * HS256 默认加密算法
     * @param $uid
     * @param string $key 密钥/私钥
     * @return string       返回加密后 token字符串
     */
    public static function encode($uid, $key = 'Honeybee') {

        /**
         *  "iss": "admin",     //该JWT的签发者
         * "iat": 1535967430,    //签发时间
         * "exp": 1535974630,    //过期时间
         * "nbf": 1535967430,     //该时间之前不接收处理该Token
         * "sub": "www.admin.com",  //面向的用户
         * "jti": "9f10e796726e332cec401c569969e13e"  //该Token唯一标识
         */
        $token = [
            "iss" => "HyZhan",                      //该JWT的签发者
            "iat" => time(),                        //签发时间
            "exp" => time() + 24 * 60 * 60,        //过期时间 (一天)
            "uid" => $uid
        ];

        return JWT::encode($token, $key, 'HS256');
    }

    public static function decode($token, $key = 'Honeybee') {
        return JWT::decode($token, $key, array('HS256'));
    }
}