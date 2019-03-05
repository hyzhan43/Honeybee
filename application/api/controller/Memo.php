<?php
/**
 * author: HyZhan
 * date:   2019/3/5
 * desc:   TODO
 */

namespace app\api\controller;

use app\api\service\MemoService;
use app\api\validate\MemoAddValidate;
use app\common\Response;
use think\Request;

class Memo {

    /**
     * @api {post} /memo/add 发布
     * @apiGroup memo
     * @apiVersion 1.0.0
     * @apiName add
     * @apiDescription 发布
     * @apiParam {String}   title           标题
     * @apiParam {String}   account         详情
     * @apiParam {Int}      type            类型  (0->默认, 1->工作, 2->学习, 3->娱乐)
     * @apiParam {Int}      level           级别  (0->普通, 1->一般, 3->重要
     * @apiSuccessExample {json} 返回样例：
     * {"code":1,"msg":"发布成功","data":null}
     */
    public function add() {

        (new MemoAddValidate())->getCheck();

        // 获取post 请求参数
        $params = Request::instance()->post();

        $memoService = new MemoService();
        $memoService->add($params);

        return Response::success('发布成功');
    }
}