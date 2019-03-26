<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"D:\lp\WWW\jiu/application/index\view\login\index.html";i:1548240536;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>红酒登录页面</title>
		<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="__STATIC__/css/style.css" />
		<link rel="stylesheet" href="__STATIC__/fonts/css/font-awesome.min.css">
        <script src="__STATIC__/js/jquery-2.1.0.js"></script>
	</head>
	
	<body>
		<div class="container">
			<!--视频开始-->
			<div class="area1">
				<h3>布鲁塞尔国际酒类大奖赛博览中心</h3>
				<h2>打造原产地直供平台</h2>
				<img src="__STATIC__/images/pro.png"/>
			</div>
			<!--视频结束-->
			<!--登录表单开始-->
			<div class="area7">
				<h1>打造原产地一站式的平台</h1>
				<p>欢迎到布鲁塞尔国际酒类大奖赛博览中心考察</p>
				<form action="" method="post">
					<div class="phone clearfix">
						<label>
							<i class="fa fa-mobile"></i>
							<span>手机号</span>
						</label>
						<input type="text"  name="phone" id="phone" placeholder="请输入您的手机号"/>
					</div>
					<div class="code clearfix">
						<label>
							<i class="fa fa-mobile"></i>
							<span>验证码</span>
						</label>
						<input type="text" name="vcode" id="vcode" placeholder="请输入验证码"/>
						<span class="yanzheng" >
							<a id="sendmsg">获取验证码</a>
						</span>
					</div>
					<button class="login btn" id="login">登录</button>
				</form>
			</div>
			<!--登录表单结束-->
		</div>
	</body>
<script>
    var InterValObj; //timer变量，控制时间
    var count = 60; //间隔函数，1秒执行
    var curCount;//当前剩余秒数
    var code = ""; //验证码
    var codeLength = 6;//验证码长度
      //发送验证码
        $('#sendmsg').click(function(){
        	var phone=$("#phone").val();
           $.ajax({
                type:"POST",
                 url:"<?php echo url('index/login/sendSms'); ?>",
                data:{"phone":phone},
            success:function (res){
                   console.log(res);
                if(res.code=="1"){
                    curCount = count;
                    //设置button效果，开始计时
                  //  $("#sendmsg").css("background-color", "LightSkyBlue");
					$('#sendmsg').attr("disabled", "true");
					$('#sendmsg').val("还剩" + curCount + "秒");
                    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                }else if(res.code=="-1"){
					alert(res.message);
				}else{
					alert(res.message);
				}
            },
            dataType: 'json'
        });
			return false;
      });

	function SetRemainTime() {
		if (curCount == 0) {
			window.clearInterval(InterValObj);//停止计时器
			$("#sendmsg").removeAttr("disabled");//启用按钮
			// $("#sendmsg").css("background-color", "");
			$("#sendmsg").val("重发验证码");
			code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
		}else {
			curCount--;
			$("#sendmsg").val("获取" + curCount + "秒");
		}
	}

     //登录模块
       $('#login').click(function () {
		   var phone=$("#phone").val();
		   var vcode=$("#vcode").val();
		   $.ajax({
			   type:"POST",
			   url:"<?php echo url('index/login/login'); ?>",
			   data:{"phone":phone,"vCode":vcode},
			   success:function (res) {
				   if (res.code==1) {
					   alert(res.message);
					   window.location.href = "<?php echo url('index/index/index'); ?>"
				   }else{
					   alert(res.message);
					   window.location.href = "<?php echo url('index/login/index'); ?>"
				   }
			   },
			   dataType: 'json'
		   });
		   return false;
	   });

</script>
</html>
