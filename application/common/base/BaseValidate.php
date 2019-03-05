<?php
/**
 * author: HyZhan
 * date:   2019/2/26
 * desc:   TODO
 */

namespace app\common\base;


use app\common\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {

    /**
     *  参数校验
     * @throws ParameterException
     */
    public function getCheck() {

        // 获取请求 request实例
        $request = Request::instance();
        // 获取 http 传入参数
        $params = $request->param();

        // 检验每一个参数
        $result = $this->batch()->check($params);

        if (!$result) {
            $e = new ParameterException([
                // 返回验证器错误信息中的第一条错误信息
                // reset 函数把数组的内部指针指向第一个元素，并返回这个元素的值。
                'msg' => reset($this->error),
            ]);
            throw $e;
        } else {
            return true;
        }
    }


    protected function isNotEmpty($value) {
        if (empty(trim($value))) {
            return false;
        } else {
            return true;
        }
    }
}