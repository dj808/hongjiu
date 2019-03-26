<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/24
 * Time: 19:06
 */

namespace app\index\controller;


use think\Controller;
use think\Config;
use think\Db;


Class Personal extends Controller{
    public function index(){
        $userId=$this->request->param('user_id');
		
        //我的团队
        $personal_id=Db::name('join_num')->field('id')->where('id',$userId)->find();
        $invite_id=(int)$personal_id['id'];
		
        $team=DB::name('join_num')->field('nickname,avatar')->where('invite_id',$invite_id)->select();
		
        $teamNum=DB::name('join_num')->where('invite_id',$invite_id)->count('id');
		
		
        $this->view->assign('team',$team);
        $this->view->assign('teamNum',$teamNum);
        //我的推荐人

         $referrer_id=Db::name('join_num')->field('invite_id')->where('id',$userId)->find();
       if($referrer_id){
           $referrer=DB::name('join_num')->where('id',$referrer_id['invite_id'])->find();
       }else{
           $referrer=DB::name('join_num')->where('id',23)->find();
       }
         
		 $this->view->assign('referrer',$referrer);
		
    
        return   $this->view->fetch();
    }
}