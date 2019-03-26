<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\lp\WWW\tpAdmin\public/../application/admin\view\demo\downloadimage.html";i:1488899632;s:69:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\base.html";i:1488899632;s:80:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\javascript_vars.html";i:1488899632;}*/ ?>
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
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>图片url：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="图片url" name="url" datatype="*" nullmsg="请填写图片url">
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
                    $("[name='url']").val('');
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
/File::downloadImage($url, $filename, $type=0);
```
html 代码：
```
<form class="form form-horizontal" id="form" method="post" action="{:\\think\\Request::instance()->baseUrl()}">
    <div class="row cl">
        <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>图片url：</label>
        <div class="formControls col-xs-6 col-sm-6">
            <input type="text" class="input-text" placeholder="图片url" name="url" datatype="*" nullmsg="请填写图片url">
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
```
javascript 代码：
```
$("#form").Validform({
    tiptype:2,
    ajaxPost:true,
    showAllError:true,
    callback:function(ret){
        ajax_progress(ret,function () {
            $("[name='url']").val('');
        });
    }
});
```
php 代码：
```
$url = $this->request->post("url");
if (substr($url, 0, 4) != "http") {
    return ajax_return_adv_error("url非法");
}
$name = "./tmp/" . get_random();
$filename = \File::downloadImage($url, $name);
if (!$filename) {
    return  ajax_return_adv_error($filename);
} else {
    $url = $this->request->domain() . substr($filename, 1);
    return ajax_return_adv("下载成功", '', "图片下载成功，<a href='{$url}' target='_blank' class='c-blue'>点击查看</a><br>{$url}");
}
```
</script>


</body>
</html>