<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\lp\WWW\tpAdmin\public/../application/admin\view\demo\hashids.html";i:1488899632;s:69:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\base.html";i:1488899632;s:80:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\javascript_vars.html";i:1488899632;}*/ ?>
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
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>ID：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" name="id" datatype="*" nullmsg="请填写ID">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <p>加密后的字符串：<span id="encode" class="c-red"></span></p>
                <p>解密后的字符串：<span id="decode" class="c-red"></span></p>
            </div>
        </div>
    </form>
    <div id="markdown" class="mt-20"></div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="__LIB__/showdown/1.4.2/showdown.min.js"></script>
<script>
    $(function () {
        $("#form").Validform({
            tiptype:2,
            ajaxPost:true,
            showAllError:true,
            callback:function(ret){
                ajax_progress(ret,function () {
                    $("#encode").html(ret.data.encode);
                    $("#decode").html(ret.data.decode);
                });
            }
        });

        var converter = new showdown.Converter(),
                text      = $("#markdown_tpl").html();
        $("#markdown").html(converter.makeHtml(text));
    })
</script>

<script type="text/plain" id="markdown_tpl">
---
方法
```
hashids($length=null,$salt=null,$alphabet=null)->encode($id); //助手函数
hashids($length=null,$salt=null,$alphabet=null)->decode($hashed_id); //助手函数
\Hashids\Hashids::instance($length,$salt,$alphabet)->encode($id);
\Hashids\Hashids::instance($length,$salt,$alphabet)->decode($hashed_id);
```
html代码：
```
<form class="form form-horizontal" id="form" method="post" action="{:\\think\\Request::instance()->baseUrl()}">
    <div class="row cl">
        <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>ID：</label>
        <div class="formControls col-xs-6 col-sm-6">
            <input type="text" class="input-text" name="id" datatype="*" nullmsg="请填写ID">
        </div>
        <div class="col-xs-3 col-sm-3"></div>
    </div>

    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
            <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
        </div>
    </div>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <p>加密后的字符串：<span id="encode" class="c-red"></span></p>
            <p>解密后的字符串：<span id="decode" class="c-red"></span></p>
        </div>
    </div>
</form>
```
javascript代码：
```
 $("#form").Validform({
    tiptype:2,
    ajaxPost:true,
    showAllError:true,
    callback:function(ret){
        ajax_progress(ret,function () {
            $("#encode").html(ret.data.encode);
            $("#decode").html(ret.data.decode);
        });
    }
});
```
php代码：
```
$id = \\think\\Request::instance()->post("id");
$hashids = hashids(8,"tpadmin");
$encode_id = $hashids->encode($id); //加密
$decode_id = $hashids->decode($encode_id); //解密
ajax_return_adv("操作成功",'',false,'','',['encode'=>$encode_id,'decode'=>$decode_id]);
```
</script>


</body>
</html>