<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"D:\lp\WWW\jiu/application/index\view\share\index.html";i:1548159919;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>红酒分享页面</title>
		<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="__STATIC__/css/style.css" />
		<link rel="stylesheet" href="__STATIC__/fonts/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class="container" style="padding-top:0;">
			<!--视频开始-->
			<!--分享开始-->
			<div class="area8 share">
				<img src="__IMG__/<?php echo $data['qrcode']; ?>"/>
				<button class="btn">分享给好友</button>
			</div>
			
			<!--分享结束-->
		</div>
	</body>
</html>
