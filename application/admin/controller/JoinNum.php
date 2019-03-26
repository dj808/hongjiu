<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\admin\Controller;
use think\Db;


class JoinNum extends Controller
{
    use \app\admin\traits\controller\Controller;
	
	 /**
     * 列表
     */
    public function index(){
        
        $listRows = 10;
        $list = Db::name('join_num')->order('id desc')->paginate($listRows, false, ['query' => $this->request->get()]);
        $listnum = Db::name('join_num')->field('id')->select();
        $count = count($listnum);
        $this->view->assign('list', $list);
        $this->view->assign("count", $count);
        $this->view->assign("page", $list->render());

        return $this->view->fetch();
    }

}
