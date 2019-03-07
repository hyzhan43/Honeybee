<?php
/**
 * author: HyZhan
 * date:   2019/3/8
 * desc:   TODO
 */

namespace app\common\api;

/**
 * api 文档
 * 封装通用api语句
 * @package app\common\api
 */
class doc {

    /**
     * @apiDefine commonRsp 全局配置成功响应信息
     * @apiSuccess (200) {String} code  0  代表无错误 否则有错误
     * @apiSuccess (200) {String} msg   信息
     * @apiSuccess (200) {String} data  具体数据
     */

    /**
     * @apiDefine pageRsp   数据分页返回
     * @apiSuccess (data) {Int}      total           总页数
     * @apiSuccess (data) {Int}      per_page        一页的数量
     * @apiSuccess (data) {Int}      current_page    当前页数
     * @apiSuccess (data) {Int}      last_page       最后的页数
     * @apiSuccess (data) {List}     data            详细数据
     */
}