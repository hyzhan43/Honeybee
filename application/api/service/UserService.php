<?php
/**
 * author: HyZhan
 * date:   2019/2/27
 * desc:   TODO
 */

namespace app\api\service;

use app\api\model\User as UserModel;
use app\common\base\BaseService;
use app\common\exception\AccountOrPasswordException;
use app\common\exception\UserExistException;
use app\common\exception\UserNotExistException;
use app\common\Utils\JWTUtil;
use think\Db;

class UserService extends BaseService {

    protected $userModel;

    /**
     * UserService constructor.
     */
    public function __construct() {
        $this->userModel = new UserModel();
    }

    /**
     * 用户账号注册
     * @param $account
     * @param $password
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws UserExistException
     */
    public function register($account, $password) {

        // 查询数据库
        $user = $this->userModel->findUserByAccount($account);

        // 用户已存在
        if ($user != null) {
            throw new UserExistException();
        }

        // 开启事务, 如果报错会事务回滚
        Db::transaction(function () use ($password, $account) {
            // 否则添加用户 User
            $this->userModel->insert([
                'account' => $account,
                'password' => md5($password)
            ]);
        });
    }


    /**
     * 用户账号登录
     * @param $account
     * @param $password
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws AccountOrPasswordException
     * @throws UserNotExistException
     */
    public function login($account, $password) {

        // 查询数据库
        $user = $this->userModel->findUserByAccount($account);

        // 用户不存在
        if ($user == null) {
            throw new UserNotExistException();
        }

        // 如果密码错误, 就抛出异常
        if (md5($password) != $user['password']) {
            throw new AccountOrPasswordException();
        }

        // 获取加密后 token
        $token = JWTUtil::encode($user['id']);

        $result = [
            'token' => $token
        ];

        return $result;
    }
}