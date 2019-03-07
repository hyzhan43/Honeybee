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
     * @apiUse commonRsp
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

    /**
     * @api {post} /memo/list/{page} 获取memo记录
     * @apiGroup memo
     * @apiVersion 1.0.0
     * @apiName getList
     * @apiParam {Int}  page    页数
     * @apiDescription 获取memo记录
     * @apiUse commonRsp
     * @apiUse pageRsp
     * @apiSuccessExample {json} 返回样例：
     * {"code":1,"msg":"获取成功","data":{"total":8,"per_page":10,"current_page":1,"last_page":1,"data":[{"id":8,"title":"标题2","desc":"des2","state":0,"type":12,"level":12,"user_id":13,"create_time":"1970-01-01 08:00:00","update_time":"1970-01-01 08:00:00"},{"id":9,"title":"标题2","desc":"des2","state":0,"type":12,"level":12,"user_id":13,"create_time":"1970-01-01 08:00:00","update_time":"1970-01-01 08:00:00"},{"id":10,"title":"标题2","desc":"des2","state":0,"type":12,"level":12,"user_id":13,"create_time":"1970-01-01 08:00:00","update_time":"1970-01-01 08:00:00"},{"id":11,"title":"标题2","desc":"des2","state":0,"type":12,"level":12,"user_id":13,"create_time":"2019-03-05 22:56:47","update_time":"2019-03-05 22:56:47"},{"id":12,"title":"标题2","desc":"des2","state":0,"type":12,"level":0,"user_id":13,"create_time":"2019-03-05 22:57:41","update_time":"2019-03-05 22:57:41"},{"id":13,"title":"标题2","desc":"des2","state":0,"type":0,"level":0,"user_id":13,"create_time":"2019-03-05 22:57:50","update_time":"2019-03-05 22:57:50"},{"id":14,"title":"   ","desc":"des2","state":0,"type":0,"level":0,"user_id":13,"create_time":"2019-03-05 23:08:59","update_time":"2019-03-05 23:08:59"},{"id":15,"title":"112123","desc":null,"state":0,"type":0,"level":0,"user_id":13,"create_time":"2019-03-05 23:40:24","update_time":"2019-03-05 23:40:24"}]}}
     */
    public function getList($page) {

        $memoService = new MemoService();
        $list = $memoService->getMemoList($page);

        return Response::success('获取成功', $list);
    }
}