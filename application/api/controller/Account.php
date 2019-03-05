<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\api\controller;


use app\api\service\UserService;
use app\api\validate\LoginValidate;
use app\api\validate\MemoAddValidate;
use app\api\validate\RegisterValidate;
use app\common\Response;
use app\common\Utils\JWTUtil;
use think\Request;

/**
 * Class Account
 * @package app\api\controller
 */
class Account {

    protected $userService;

    /**
     * Account constructor.
     * 自动依赖注入到 userService
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * @api {post} /user/register  用户注册
     * @apiGroup user
     * @apiVersion 1.0.0
     * @apiName register
     * @apiDescription 用户注册
     * @apiParam {String}   account         账号
     * @apiParam {String}   password        密码
     * @apiSuccessExample {json} 返回样例：
     * {"code":1,"msg":"注册成功","data":null}
     */
    public function register() {

        (new RegisterValidate())->getCheck();

        $this->userService->register(input('account'), input('password'));

        return Response::success('注册成功');
    }


    /**
     * @api {post} /user/login  用户登录
     * @apiGroup user
     * @apiVersion 1.0.0
     * @apiName login
     * @apiDescription 用户登录
     * @apiParam {String}   account         账号
     * @apiParam {String}   password        密码
     * @apiSuccessExample {json} 返回样例：
     * {"code":1,"msg":"登录成功","data":{"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJIeVpoYW4iLCJpYXQiOjE1NTE3NzkwMzMsImV4cCI6MTU1MTg2NTQzMywidWlkIjoxM30.ia6dV4jzD2NKHhKW11W9KhYJsYommFuyOb7XOzLnz_s"}}
     */
    public function login() {

        // 参数校验
        (new LoginValidate())->getCheck();

        // 传递给 Service 调用
        $result = $this->userService->login(input('account'), input('password'));

        return Response::success('登录成功', $result);
    }

    public function token($token) {
        $a = JWTUtil::decode($token);
        return Response::success('1', $a);
    }
}