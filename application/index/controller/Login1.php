<?php
namespace app\index\controller;


use think\Db;
use think\Exception;
use think\Request;
use think\Config;
use Aliyun\Core\Config as AliyunConfig;
use Aliyun\Core\Profile\DefaultProfile;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;

/**
 * 前端首页控制器
 * Class Index
 * @package app\index\controller
 */
class Login extends Base
{
    /**
     * 首页显示
     */
    public function index()
    {
		/*   if(!session('useropenid')){
             $s="http://www.loungwangtouzi.com/index/index/index";
             header("Location:".$s."");exit;
         }   */
		 
        //微信授权获取基本信息
        if ($this->request->param('code')==''){//没有code，去微信接口获取code码
            $this->getcodess();
        } else {//获取code后跳转回来到这里了
            $code=$this->request->param('code');
			
            //获取openid
            $openid = $this->getOpenid($code);
            $access_token=$this->getAccesstoken();
         
            $wxUserInfo=$this->getWxUserInfo(session('opennewid'),session('newaccess_token'));
			 
            $user_openid = $wxUserInfo['openid'];
           
            session('useropenid',$user_openid);
            // 判断用户是否存在
            $data_user = Db::name('join_num')->where('open_id',$user_openid)->find();
			
            if(empty($data_user)){	
                $data['open_id'] = $user_openid;
                $data['nickname']=substr($wxUserInfo['nickname'],0,6);
                $data['avatar']=$wxUserInfo['headimgurl'];
                $data['create_time']=time();
                Db::name('join_num')->insert($data);
            }else{			
                $data['nickname']=$wxUserInfo['nickname'];
                $data['avatar']=$wxUserInfo['headimgurl'];
                $data['update_time']=time();
                Db::name('join_num')->where('open_id',$user_openid)->update($data);
            }
        }
      return  $this->view->fetch();
    }

    /**
     * 登录功能
     */
    public function login(){
        $request=Request::instance();
        if($request->isPost()){
            $phone=trim($request->param('phone'));
            if(!$phone){
               return $this->no('-1','手机号码不能为空');
            }
            if(false===$this->isValidaMobile($phone)){
                return  $this->no('-1','手机号码格式不正确');
            }
            $vCode=trim($request->param('vCode'));
            if(!$vCode){
                return  $this->no('-1','验证码不能为空');
            }
            $data=$request->post();
            $vcode=Db::name('code')->field('code')->where('phone',$data['phone'])->order('id desc')->find();
            if($vCode!=$vcode['code']){
                return $this->no('-1','请输入正确的验证码');
            }else{
                try{
					/* if(session('useropenid')==NULL){
						$userInfo=Db::name('join_num')->where('phone',$data['phone'])->find();
						if($userInfo){
							$s="http://www.loungwangtouzi.com/index/index/index?";
                           header("Location:".$s."");exit;
						}
					}else { */
					   
						$res=Db::name('join_num')->where('open_id',session('useropenid'))->setField('phone',$data['phone']);
						if($res){
						   return  $this->ok('1','登录成功');
						}else{
						   return   $this->no('-1','登录失败');
						}
				// }
                }catch (\Exception $e){
                    throw new Exception($e->getMessage());
                }
            }

        }
    }


    //获取微信用户的信息
    public  function getWxUserInfo($openid,$access_token){
        $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid";
	  //  $userinfo_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $userinfo_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS,false);
        $result = curl_exec($ch);
        curl_close($ch);
        file_put_contents("log_wx.txt", $result);
        $info = json_decode(htmlspecialchars_decode($result), true);
   
        return $info;

    }

    // 用于请求微信接口获取数据
    public  function getOpenid($code){
        //获取微信配置参数
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx9168c9c1627e9476&secret=9bb3e634c324ef42408ad9ea17a48c7f&code=$code&grant_type=authorization_code";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $tmpInfo=curl_exec($curl);
        curl_close($curl);
        file_put_contents("log32.log",$tmpInfo,FILE_APPEND);
        
        $openid = json_decode(htmlspecialchars_decode($tmpInfo), true);
        if(isset($openid['openid'])){
            session('opennewid',$openid['openid']);
            session('newaccess_token',$openid['access_token']);
            return $openid;
        }else{
            $newopenid['openid']=session('opennewid');
            $newopenid['access_token']=session('newaccess_token');
            return $newopenid;
        }
    }

    //获取access_token
    public function getAccesstoken()
    {
        //获取微信配置参数
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9168c9c1627e9476&secret=9bb3e634c324ef42408ad9ea17a48c7f"; 
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_HEADER, 0);  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS,false);
        $result = curl_exec($ch);  
        curl_close($ch);
        file_put_contents("log.txt", $result);
        $access_token = json_decode(htmlspecialchars_decode($result), true);
	
        return $access_token['access_token'];
    }

    //授权反馈
    public function getcodess()
    {
        //获取微信配置参数
        $wxConfig = Config::get('wechat');
        $appId=$wxConfig['AppId'];

        file_put_contents("log3233.log",1);
        $url = "http://www.loungwangtouzi.com/index/login/index";
        $url = urlencode($url);
       // $url =rawurlencode($url);
        
       $s="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx9168c9c1627e9476&redirect_uri=$url&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
       
        header("Location:".$s."");exit;
    }

    //发送手机短信
    public function sendSms()
    {
        $phone=trim($this->request->param('phone'));
        if(!$phone){
          return  $this->no('-1','手机号码不能为空');
        }
        //code就是六位随机码作为验证码
        //引进阿里的配置文件
        // var_dump($phone);exit;
        vendor('alidayu.vendor.autoload');
        // 加载区域结点配置
        AliyunConfig::load();				//加载区域结点配置

        $smsConfig = Config::get('sendSms');

        // 初始化用户Profile实例
        $profile = DefaultProfile::getProfile($smsConfig['ALI_SMS']['REGION'], $smsConfig['cfg_smssid'],$smsConfig['cfg_smstoken']);

        // 增加服务结点
        DefaultProfile::addEndpoint($smsConfig['ALI_SMS']['END_POINT_NAME'], $smsConfig['ALI_SMS']['REGION'], $smsConfig['ALI_SMS']['PRODUCT'], $smsConfig['ALI_SMS']['DOMAIN']);
        // 初始化AcsClient用于发起请求

        $acsClient = new DefaultAcsClient($profile);

        // 初始化SendSmsRequest实例用于设置发送短信的参数
        $request = new SendSmsRequest();

        // 必填，设置雉短信接收号码
        $request->setPhoneNumbers($phone);

        // 必填，设置签名名称
        $request->setSignName($smsConfig['cfg_smsname']);
        // 必填，设置模板CODE
        $request->setTemplateCode('SMS_122293648');

        $code=str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        $params = array(
            'code' => $code
        );
        $d['code']=$code;
        $d['phone']=$phone;
        $d['create_time']=time();
        Db::name('code')->insert($d);
        // 可选，设置模板参数
        $request->setTemplateParam(json_encode($params));
        // 可选，设置流水号
        //if($outId) {
        //    $request->setOutId($outId);
        //}
        // 发起访问请求
        $acsResponse = $acsClient->getAcsResponse($request);
        // 打印请求结果
        if($acsResponse){
            return  $this->ok('1','手机验证码发送成功');
        }else{
            return  $this->no('-11','系统繁忙，请重试');
        }
    }


    /**
     * 验证手机号码
     * @param $phone
     * @return bool
     */
    public  function isValidaMobile($phone){
        return preg_match('/^1[3456789]{1}\d{9}$/',$phone) ? true :false;
    }



}
