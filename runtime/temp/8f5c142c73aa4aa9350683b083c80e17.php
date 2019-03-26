<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"D:\lp\WWW\jiu/application/index\view\index\index.html";i:1548221345;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>红酒</title>
		<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="__STATIC__/css/style.css" />
		<link rel="stylesheet" href="__STATIC__/fonts/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class="container">
			<!--视频开始-->
			<div class="area1">
				<h3>布鲁塞尔国际酒类大奖赛博览中心</h3>
				<h2>打造原产地直供平台</h2>
				<div class="video">
					<video src="__STATIC__/res/video.mp4" controls="controls" loop></video>
				</div>
			</div>
			<!--视频结束-->
			<!--中心介绍开始-->
			<div class="area2">
				<p class="area2-tab">中心介绍</p>
				<div class="area2-box">
					<h3>布鲁塞尔国际酒类大奖赛博览中心</h3>
					<h2>打造原产地直供平台</h2>
					<p>“布鲁塞尔国际酒类大奖赛博览中心”作为无锡市政府重点引进的“放心酒工程”项目，
						正是在这样的市场背景下应运而生的。依托酒界“奥斯“布鲁塞尔国际酒类大奖赛”
						在世界范围内的资源、公信力和影响力，博览中心项目拥有得天独厚的商业优势，
						吸引着来自国内官方的关怀以及全球各界的关注。
					</p>
					<img src="__STATIC__/__STATIC__/images/hongjiu.png"/>
					<ul>
						<li>一个获得政府园区管委会和国际赛事组委会双重背书的项目</li>
						<li>一个同时服务于消费者、酒庄/品牌商和渠道商的平台</li>
						<li>一个培育创新发展的产业链合作的创客天地</li>
						<li>一个依托保税区、提供产地直营性产品的酒类贸易渠道</li>
						<li>一个可以运用现代技术提供新零售体验的新商业地标</li>
						<li>一个联手江南大学，建立酒行业人才培训和产品研发的技术中心</li>
					</ul>
				</div>
			</div>
			<!--中心介绍结束-->
			<!--加盟人数开始-->
			<div class="area3 row clearfix">
				<p>加盟人数（<?php echo $joinCount; ?>人）</p>
				<?php if(is_array($joinNum) || $joinNum instanceof \think\Collection || $joinNum instanceof \think\Paginator): $i = 0; $__LIST__ = $joinNum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="col-xs-2">
					<div class="area3-pa">
						<img src="__STATIC__/<?php echo $vo['avatar']; ?>"/>
						<p><?php echo $vo['nickname']; ?></p>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!--加盟人数结束-->
			<!--分享人数-->
			<div class="area4">
				<p>分享人数（<?php echo $shareCount; ?>人）</p>
				<div class="area4-box">
					<ul class="clearfix">
						<?php if(is_array($shareNum) || $shareNum instanceof \think\Collection || $shareNum instanceof \think\Paginator): $i = 0; $__LIST__ = $shareNum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="clearfix">
							<div class="col-xs-2">
								<img src="__IMG__/<?php echo $vo['avatar']; ?>"/>
							</div>
							<div class="col-xs-4">
								<p><?php echo $vo['nickname']; ?></p>
								<p><?php echo $vo['phone']; ?></p>
							</div>
							<div class="col-xs-6">
								<p class="area4-pay">已经支付￥<?php echo $vo['share_money']; ?></p>
								<p><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></p>
							</div>
						</li>

						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<!--分享人数结束-->
			<!--馆内陈列-->
			<div class="area5">
				<h2>馆内陈列</h2>
				<h3>近距离了解布鲁塞尔国际酒类大奖赛博览中心</h3>
				<ul>
					<li>
						<img src="__STATIC__/images/zhanlan.png"/>
					</li>
					<li>
						<img src="__STATIC__/images/zhanlan.png"/>
					</li>
					<li>
						<img src="__STATIC__/images/zhanlan.png"/>
					</li>
					<li>
						<img src="__STATIC__/images/zhanlan.png"/>
					</li>
				</ul>
			</div>
			<!--馆内陈列结束-->
			<div class="area6">
				<p>相信您也有朋友是需要的，您的朋友加盟或者购买成功后，您将获得<span>6-66</span>元红包奖励，
					红包秒到您的微信零钱包。
				</p>
				<p><span>1、海报推广一一生成推广专属海报；</span></p>
				<p><span>2、点击“帮我分享”生成海报分享朋友圈；</span></p>
				<p><span>3、朋友通过您的链接购买后，您将获得6-66元红包立即到您的微信钱包。</span></p>
				<h3>有任何问题请点击左下角电话按钮联系客服</h3>
			</div>
		
			<!--页面底部-->
			<div class="footer row clearfix">
				<div class="col-xs-6 jiameng">
					<a href="<?php echo Url('index/join/index','',''); ?>">立即加盟</a>
				</div>
				<div class="col-xs-6 fenxiang">
					<a href="<?php echo Url('index/share/index',array('user_id'=>$userId)); ?>">帮我分享</a>
				</div>
			</div>
			<!--页面底部结束-->
		</div>
	</body>
</html>
