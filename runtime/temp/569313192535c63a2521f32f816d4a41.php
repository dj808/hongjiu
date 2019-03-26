<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\lp\WWW\jingguan\public/../application/admin\view\jpkc\edit.html";i:1547176898;s:70:"D:\lp\WWW\jingguan\public/../application/admin\view\template\base.html";i:1547105797;s:81:"D:\lp\WWW\jingguan\public/../application/admin\view\template\javascript_vars.html";i:1547105797;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
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
    <form class="form form-horizontal" id="form" method="post" enctype="multipart/form-data"
          action="<?php echo Url('admin/jpkc/edit','',''); ?>">
        <input type="hidden" name="id" value="<?php echo isset($list['id']) ? $list['id'] :  ''; ?>">
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">课程名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="课程名称" name="name" value="<?php echo isset($list['name']) ? $list['name'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>课程图片：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" id="uploads" name="img" placeholder="请点击后面的上传按钮" datatype="*"
                       nullmsg="请填写图片url" style="width:300px;" value="<?php echo isset($list['img']) ? $list['img'] :  ''; ?>">
                <button type="button" class="btn btn-primary radius"
                        onclick="layer_open('文件上传','<?php echo \think\Url::build('Upload/index', ['id' => 'uploads']); ?>')">
                    上传
                </button>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>课程介绍：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <textarea name="intro" id="" cols="106" rows="10"><?php echo $list['intro']; ?></textarea>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script>
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret){
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>