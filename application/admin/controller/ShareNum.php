<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\admin\Controller;
use think\Db;


class ShareNum extends Controller
{
    use \app\admin\traits\controller\Controller;
	
	public function index(){
		 $list=Db::name('share_num')
            ->alias('a')
            ->field('a.*,b.nickname,b.phone')
            ->join('__JOIN_NUM__ b','a.user_id=b.id')
            ->select();
        $count=Db::name('share_num')->count('id');
        $this->view->assign('list',$list);
		$this->view->assign('count',$count);
      
		return   $this->view->fetch();
	}

}
