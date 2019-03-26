<?php
namespace app\index\controller;


use think\Db;
use think\Exception;
use think\Request;
use think\Response;
use think\Controller;
use think\Image;

/**
 * 前端首页控制器
 * Class Index
 * @package app\index\controller
 */
class Share extends Controller
{
    /**
     * 分享功能的实现
     */
    public function index(){
        $userId=$this->request->param('user_id');
        $data=Db::name('share_num')->field('id,qrcode')->where('user_id',$userId)->find();
        if($data['qrcode']){
            $this->view->assign('data',$data);
        }else{
            header('Content-Type: image/png');
            vendor("phpqrcode.phpqrcode");//引入工具包
            $qRcode = new \QRcode();
            $path = "public/Uploads/QRcode/";//生成的二维码所在目录
            $time=time().'.png';
            $fileName=$path.$time;
            $data='http://www.loungwangtouzi.com/index/login/index?user_id='.$userId;
            $level='L';
			
			$info=[];
            $size=4.5;
            ob_end_clean();//清空缓冲区
            $qRcode::png($data,$fileName,$level, $size);
            
			session('imgpath',$fileName);

            $file_name = iconv("utf-8","gb2312",$time);
            $file_path = $_SERVER['DOCUMENT_ROOT'].'/'.$fileName; //获取下载文件的大小
            $file_size = filesize($file_path); //
            $file_temp = fopen ( $file_path, "r" ); //返回的文件
           
            header("Content-type:application/octet-stream"); //按照字节大小返回
            header("Accept-Ranges:bytes"); //返回文件大小
            header("Accept-Length:".$file_size); //这里客户端的弹出对话框
            header("Content-Disposition:attachment;filename=".$time);
           
		   
		     $path_1 = "http://www.loungwangtouzi.com/public/static/index/images/share.png";
			 $path_2 = "http://www.loungwangtouzi.com/".session('imgpath');
		     
		
			 $image_1 = imagecreatefrompng($path_1);
             $image_2 = imagecreatefrompng($path_2);
             $image_3 = imageCreatetruecolor(imagesx($image_1),imagesy($image_1));
            $color = imagecolorallocate($image_3, 255, 255, 255);
            imagefill($image_3, 0, 0, $color);
            imageColorTransparent($image_3, $color);
            imagecopyresampled($image_3,$image_1,0,0,0,0,imagesx($image_1),imagesy($image_1),imagesx($image_1),imagesy($image_1));
            imagecopymerge($image_3,$image_2,118,382,0,0,imagesx($image_2),imagesy($image_2), 100);
            //将画布保存到指定的gif文件
            $fn='public/Uploads/QRcode/'.time().'.jpg';
            
            // $im= '/Uploads/QRcode/'.$time;
               imagejpeg($image_3, $fn);
            //将数据进行销毁
            @unlink($path_2);
			 
			 $info['qrcode']=$fn;
			 $info['user_id']=$userId;
			 $info['create_time']=time();
		
			
            Db::name('share_num')->insert($info);
            
           
            $this->view->assign('data',$info);
        }
        return  $this->view->fetch();
    }

    /**
     * 发放现金红包
     * $str   支付的人的上级id
     */
    public function payLuckyMoney($str)
    {
        //获得上级的信息
        $where['open_id']=$str;
        $in=Db::name('bminfo')->field('pid')->where($where)->find();
        $info=Db::name('bminfo')->field('client_id,open_id')->where('id',$in['pid'])->find();
        $obj2 = array();
        //appid
        $obj2['wxappid'] = 'wxafe3f25daebca711';
        //商户id
        $obj2['mch_id'] = '1521765611';
        //组合成28位，根据官方开发文档，可以自行设置
        $obj2['mch_billno'] = "abc123456def789ghijklmn123456766" . date('YmdHis') . rand(1000, 9999);
        // 调用接口的机器IP地址
        $obj2['client_ip'] = $info['client_id'];
        //接收红包openid
        $obj2['re_openid'] = $info['open_id'];

        /* 付款金额设置start，按照概率设置随机发放。
         * 1-200元之间，单位分。这里设置95%概率为1-2元，5%的概率为2-10元
         */
        $n = rand(1, 100);
        if ($n <= 95) {
            $obj2['total_amount'] = rand(1, 2);
        } else {
            $obj2['total_amount'] = rand(2, 3);
        }

        /* 付款金额设置end */

        // 红包个数
        $obj2['total_num'] = 1;
        // 商户名称
        $obj2['send_name'] = "大象教育";
        // 红包祝福语
        $obj2['wishing'] = "恭喜发财，大吉大利";
        // 活动名称
        $obj2['act_name'] = "布鲁塞尔国际酒类大奖分享领红包";
        // 备注
        $obj2['remark'] = "布鲁塞尔国际酒类大奖红包";

        /* 文档中未说明以下变量，李富林博客中有。注释起来也没问题。不需要。
        $obj2['min_value'] = $money;
        $obj2['max_value'] = $money;
        $obj2['nick_name'] = '小门太红包';
        */

        $url = "https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack";
        $isPay = pay_lucky_money($url, $obj2);//调用commom.php里面的方法

        $res = $this->XmlToArr($isPay);

        // 发放成功，把红包数据插入数据库
        if ($res['return_msg'] == '发放成功') {
            //发放成功，进行逻辑处理
            //红包金额入库
            $b['yongjin']=$obj2['total_amount'];
            Db::name('bminfo')->where('id',$info['id'])->update($b);
            return $res['return_msg'];
            //红包金额入库结束
        } else {
            // 发放失败，返回失败原因
            return $res['return_msg'];
        }
    }


    public function XmlToArr($xml)
    {
        if($xml == '') return '';
        libxml_disable_entity_loader(true);
        $arr = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $arr;
    }

}
