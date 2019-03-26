<?php
namespace app\index\controller;


use think\Db;
use think\Exception;
use think\Request;
use think\Response;
use think\Controller;

/**
 * 前端首页控制器
 * Class Index
 * @package app\index\controller
 */
class Index extends Controller
{

    public function index(){
        /* if(session('useropenid')){
            $s="http://www.loungwangtouzi.com/index/index/index";
            header("Location:".$s."");exit;
        } */
        //获取参与人数信息
        $joinNum=Db::name('join_num')->field('nickname,avatar')->select();
        $joinCount=Db::name('join_num')->count('id');
        $this->view->assign('joinNum',$joinNum);
        $this->view->assign('joinCount',$joinCount);

        // 判断用户是否存在
        $userId = Db::name('join_num')->field('id')->where('open_id',session('useropenid'))->find();
        $this->view->assign('userId',$userId['id']);

        //获取分享人的信息
        $shareNum=Db::name('share_num')
            ->alias('a')
            ->field('a.share_money,a.create_time,b.nickname,b.avatar,b.phone')
            ->join('__JOIN_NUM__ b','a.user_id=b.id')
            ->select();
        $shareCount=Db::name('share_num')->count('id');
        $this->view->assign('shareNum',$shareNum);
        $this->view->assign('shareCount',$shareCount);

        return   $this->view->fetch();
    }
}
