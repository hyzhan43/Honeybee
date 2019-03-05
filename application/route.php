<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// 测试
Route::get('hello', 'sample/Test/hello');


/**
 *  Account模块
 */
Route::post('api/user/login', 'api/Account/login');
Route::post('api/user/register', 'api/Account/register');



/**
 *  Memo模块
 */
Route::post('api/memo/add', 'api/Memo/add');