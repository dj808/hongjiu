<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\lp\WWW\tpAdmin\public/../application/admin\view\about_us\index.html";i:1546934506;s:69:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\base.html";i:1488899632;s:80:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\javascript_vars.html";i:1488899632;}*/ ?>
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
    
<link rel="stylesheet" href="__LIB__/lightbox2/css/lightbox.min.css">

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


<div class="page-container">
    <?php if($list): ?>
    <form class="form form-horizontal" id="form" method="post" enctype="multipart/form-data"
          action="<?php echo Url('admin/AboutUs/edit','',''); ?>">
        <input type="hidden" name="id" value="<?php echo isset($list['id']) ? $list['id'] :  ''; ?>">
        <?php else: ?>
        <form class="form form-horizontal" id="form" method="post" enctype="multipart/form-data" action="<?php echo Url('admin/AboutUs/add','',''); ?>">
    <?php endif; ?>
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">公司名称：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="公司名称" name="company_name" value="<?php echo isset($list['company_name']) ? $list['company_name'] :  ''; ?>" datatype="*" nullmsg="公司名称不能为空">
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>公司LOGO：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" id="uploads" name="logo" placeholder="请点击后面的上传按钮" datatype="*"
                           nullmsg="请填写图片url" style="width:300px;" value="<?php echo isset($list['logo']) ? $list['logo'] :  ''; ?>">
                    <button type="button" class="btn btn-primary radius"
                            onclick="layer_open('文件上传','<?php echo \think\Url::build('Upload/index', ['id' => 'uploads']); ?>')">
                        上传
                    </button>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">客服电话：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="客服电话" name="tel" value="<?php echo isset($list['tel']) ? $list['tel'] :  ''; ?>" >
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">手机号码：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="手机号码" name="phone" value="<?php echo isset($list['phone']) ? $list['phone'] :  ''; ?>" datatype="*" nullmsg="手机号码不能为空">
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">公司邮箱：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="公司邮箱" name="email" value="<?php echo isset($list['email']) ? $list['email'] :  ''; ?>" datatype="*" nullmsg="公司邮箱不能为空">
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">QQ号码：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="qq" name="qq" value="<?php echo isset($list['qq']) ? $list['qq'] :  ''; ?>" >
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">公司地址：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="text" class="input-text" placeholder="公司地址" name="address" value="<?php echo isset($list['address']) ? $list['address'] :  ''; ?>" datatype="*" nullmsg="公司地址不能为空">
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>公司简介：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <?php if($list): ?>
                    <textarea name="" id="editor"><?php echo $list['editorValue']; ?></textarea>
                    <?php else: ?>
                    <div><script id="editor" type="text/plain" style="height:400px;width:800px;"></script></div>
                    <div id="markdown" class="mt-20"></div>
                    <?php endif; ?>
                </div>
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
<script src = "__LIB__/lightbox2/js/lightbox.min.js" ></script>
<script src="__LIB__/laypage/1.3/laypage.js"></script>
<script type="text/javascript" src="__LIB__/showdown/1.4.2/showdown.min.js"></script>
<script type="text/javascript" src="__LIB__/My97DatePicker/WdatePicker.js"></script>
<script>window.UEDITOR_HOME_URL = '__LIB__/ueditor/1.4.3/'</script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script>
    $(function () {
        var ue = UE.getEditor('editor', {
            serverUrl: '<?php echo \think\Url::build("Ueditor/index"); ?>'
        });
        var converter = new showdown.Converter(),
            text = $("#markdown_tpl").html();
        $("#markdown").html(converter.makeHtml(text));
    })
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $('.skin-square input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: false,
            callback: function (ret) {
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>