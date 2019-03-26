<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:52:"D:\lp\WWW\jiu/application/index\view\join\index.html";i:1548123074;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>红酒加盟页面</title>
		<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="__STATIC__/css/style.css" />
		<link rel="stylesheet" href="__STATIC__/fonts/css/font-awesome.min.css">
	</head>
	
	<body style="background: #fff;">
		<div class="container">
			<div class="area9">
				<h1>加盟中心</h1>
				<form action="<?php echo Url('index/join/join','',''); ?>" method="post">
					<input type="text" placeholder="请输入公司名称" name="company_name"/>
					<input type="text" placeholder="请输入您的姓名" name="user_name"/>
					<input type="tel" placeholder="请输入您的电话" name="phone"/>
					<button class="btn">立即加盟</button>
				</form>
			</div>
		</div>
	</body>
</html>
