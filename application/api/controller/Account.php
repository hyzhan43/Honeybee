<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\api\controller;


use app\api\service\UserService;
use app\api\validate\LoginValidate;
use app\api\validate\RegisterValidate;
use app\common\Response;

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
     *  用户注册
     * @param $account
     * @param $password
     * @return \think\response\Json
     * @throws \app\common\exception\ParameterException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \app\common\exception\UserExistException
     */
    public function register($account, $password) {

        (new RegisterValidate())->getCheck();

        $this->userService->register($account, $password);

        return Response::success('注册成功');
    }


    /**
     *  登录
     * @param $account
     * @param $password
     * @return string
     * @throws \app\common\exception\AccountOrPasswordException
     * @throws \app\common\exception\ParameterException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \app\common\exception\UserNotExistException
     */
    public function login($account, $password) {

        // 参数校验
        (new LoginValidate())->getCheck();

        // 传递给 Service 调用
        $result = $this->userService->login($account, $password);

        return Response::success('登录成功', $result);
    }
}