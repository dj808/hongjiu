<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"D:\lp\WWW\jiu/application/admin\view\index\welcome.html";i:1548057803;s:55:"D:\lp\WWW\jiu/application/admin\view\template\base.html";i:1548057803;s:66:"D:\lp\WWW\jiu/application/admin\view\template\javascript_vars.html";i:1548057803;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>我的桌面</title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
    <p class="f-20 text-success">欢迎使用 <?php echo \think\Config::get('site.name'); ?> <span class="f-14"><?php echo \think\Config::get('site.version'); ?></span> 后台管理系统！</p>
    <p>登录次数：<?php echo $info['login_count']; ?> </p>
    <?php if(session('last_login_time')): ?>
    <p>上次登录IP：<?php echo $last_login_ip; ?> &nbsp;&nbsp;&nbsp; 上次登录时间：<?php echo date('Y-m-d H:i:s',\think\Session::get('last_login_time')); ?> &nbsp;&nbsp;&nbsp; 上次登录地点：<?php echo $last_login_loc; ?></p>
    <?php endif; ?>
    <p>本次登录IP：<?php echo $current_login_ip; ?> &nbsp;&nbsp;&nbsp; 本次登录时间：<?php echo date('Y-m-d H:i:s',$info['last_login_time']); ?> &nbsp;&nbsp;&nbsp; 本次登录地点：<?php echo $current_login_loc; ?></p>
</div>
<footer class="footer mt-20">
    <div class="container">
    </div>
</footer>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>