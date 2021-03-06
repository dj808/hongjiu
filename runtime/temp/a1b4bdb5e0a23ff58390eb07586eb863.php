<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\lp\WWW\jingguan\public/../application/admin\view\generate\index.html";i:1488899632;s:70:"D:\lp\WWW\jingguan\public/../application/admin\view\template\base.html";i:1488899632;s:81:"D:\lp\WWW\jingguan\public/../application/admin\view\template\javascript_vars.html";i:1488899632;}*/ ?>
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
    
<style>
    .input-text, .select-box, .btn {
        margin-bottom: 10px;
    }
</style>

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
    <?php echo \think\Config::get('site.name'); ?> 代码自动生成器
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:;"
       onclick="location.replace(location.href);" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Url::build('run'); ?>">
        <div class="row cl">
            <label class="form-label col-xs-1">从数据表生成：</label>
            <div class="formControls col-xs-8">
                <div class="select-box" style="width: 260px">
                    <select class="select db-table">
                        <option value="">不从数据表生成</option>
                        <?php if(is_array($tables) || $tables instanceof \think\Collection || $tables instanceof \think\Paginator): if( count($tables)==0 ) : echo "" ;else: foreach($tables as $key=>$table): ?>
                        <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <button type="button" class="btn btn-success db-jump ml-10" title="点击此项选择从数据库生成字段">
                    确认选择
                </button>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1">生成文件：</label>
            <div class="formControls col-xs-8">
                <div class="select-box" style="width: 260px">
                    <select name="file" class="select">
                        <option value="all">默认生成文件（all）</option>
                        <option value="controller">控制器（controller）</option>
                        <option value="model">模型（model）</option>
                        <option value="validate">验证器（validate）</option>
                        <?php if(!\think\Request::instance()->param('table')): ?>
                            <option value="table">数据表（table）</option>
                        <?php endif; ?>
                        <option value="edit">编辑添加页（edit.html）</option>
                        <option value="index">列表页（index.html）</option>
                        <option value="recycleBin">回收站（recyclebin.html）</option>
                        <option value="form">搜索框（form.html）</option>
                        <option value="th">表格表头（th.html）</option>
                        <option value="td">表格表体（td.html）</option>
                        <option value="config">配置文件（config.php）</option>
                        <option value="dir">目录（dir）</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <h2>控制器信息 ：</h2>
        <div class="row cl">
            <label class="form-label col-xs-1"><span class="c-red">*</span>模块：</label>
            <div class="formControls col-xs-8">
                <input type="text" class="input-text" placeholder="默认为当前模块" name="module"
                       datatype="/^[a-z]+$/" nullmsg="请填写模块名称"
                       errormsg="模块名称必须是小写字母"
                       value="<?php echo \think\Request::instance()->module(); ?>"
                       title="默认为当前模块" style="width: 49%">
            </div>
            <div class="col-xs-2"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1"><span class="c-red">*</span>控制器：</label>
            <div class="formControls col-xs-8">
                <input type="text" class="input-text" placeholder="字母，驼峰式，例如AdminGroup，前面可加小写目录" name="controller"
                       errormsg="必须是(dir.[dir2.dir3....])?Controller的格式" value="<?php echo isset($controller) ? $controller :  ''; ?>"
                       datatype="/^([a-z][a-z0-9]*\.)*[A-Z]\w*$/" nullmsg="控制器英文名必填"
                       title="正则：/^([a-z][a-z0-9]*\.)*[A-Z]\w*$/，比如one.Demo或者Demo，注意大小写" style="width: 49%">
                <input type="text" class="input-text" placeholder="中文，例如 分组" name="title" style="width: 49%">
            </div>
            <div class="col-xs-2"></div>
        </div>
        <h2>表单信息 ：</h2>
        <table class="table-form table table-border table-bordered table-hover table-bg mt-20 skin-minimal">
            <thead>
            <tr class="text-c">
                <th width="110" rowspan="2" title="删除后不可恢复，谨慎操作">
                    操作<br>
                    <a href="javascript:;" class="label label-success radius op-add" data-type="form" data-header="1">增加一栏</a>
                </th>
                <th width="660" colspan="5" title="字段配置信息">字段</th>
                <th width="90" rowspan="2" title="勾选后自动给字段添加排序功能">筛选排序</th>
                <th width="220" colspan="2" title="自动生成搜索项">搜索</th>
                <th width="630" colspan="4" title="如何使用请看该插件文档">ValidForm 验证</th>
            </tr>
            <tr class="text-c">
                <th width="120" title="中文描述，编辑页为对应label标签内容，首页对应表头内容"><span class="c-red">*</span> 标题</th>
                <th width="120" title="一般为对应数据库字段的名称"><span class="c-red">*</span> 名称</th>
                <th width="130" title="自动生成编辑页相应的表单控件"><span class="c-red">*</span> 类型</th>
                <th width="170"
                    title="只针对select,radio,checkbox控件,支持变量和配置值，例如 {foo}-对应conf.foo对应的配置项，生成foreach循环 | 1:值一#2:值二#3:值三 | 空值的默认标签名">
                    选项值
                </th>
                <th width="120" title="字段编辑页默认值">默认值</th>
                <th width="90" title="勾选后自动生成控制器筛选项和前端搜索框">表单搜索</th>
                <th width="130" title="select的取值为字段中的选项值">搜索类型</th>
                <th width="90" title="勾选后在验证器和前端生成必填校验规则">是否必填</th>
                <th width="180" title="插件的datatype配置项">datatype</th>
                <th width="180" title="插件的nullmsg配置项">nullmsg</th>
                <th width="180" title="插件的errormsg配置项">errormsg</th>
            </tr>
            </thead>
            <tbody id="tbody-form">
            <tr>
                <td title="删除后不可恢复，谨慎操作">
                    <a href="javascript:;" class="label label-success radius mr-10 op-add" data-type="form">增加一栏</a>
                    <a href="javascript:;" class="label label-danger radius op-delete">删除</a>
                </td>
                <td title="中文描述，编辑页为对应label标签内容，首页对应表头内容">
                    <input type="text" class="input-text form-title" placeholder="中文描述" name="form[0][title]">
                </td>
                <td title="一般为对应数据库字段的名称">
                    <input type="text" class="input-text form-name" placeholder="字段，字母" name="form[0][name]">
                </td>
                <td title="自动生成编辑页相应的表单控件">
                    <div class="select-box">
                        <select class="select" name="form[0][type]">
                            <option value="text">text</option>
                            <option value="select">select</option>
                            <option value="radio">radio</option>
                            <option value="textarea">textarea</option>
                            <option value="checkbox">checkbox</option>
                            <option value="password">password</option>
                            <option value="number">number</option>
                            <option value="date">date</option>
                        </select>
                    </div>
                </td>
                <td title="只针对select,radio,checkbox控件,支持变量和配置值，例如 {foo}-对应conf.foo对应的配置项，生成foreach循环 | 1:值一#2:值二#3:值三 | 空值的默认标签名">
                    <input type="text" class="input-text" placeholder="变量或以#隔开" name="form[0][option]">
                </td>
                <td title="字段编辑页默认值">
                    <input type="text" class="input-text" placeholder="表单默认值" name="form[0][default]">
                </td>
                <td title="勾选后自动给字段添加排序功能">
                    <div class="radio-box" style="display:block;margin-top: -10px;margin-left: 45%">
                        <input type="checkbox" name="form[0][sort]" value="1">
                    </div>
                </td>
                <td class="text-c" title="勾选后自动生成控制器筛选项和前端搜索框">
                    <div class="radio-box" style="display:block;margin-top: -10px;margin-left: 45%">
                        <input type="checkbox" name="form[0][search]" value="1">
                    </div>
                </td>
                <td title="select的取值为字段中的选项值">
                    <div class="select-box">
                        <select class="select" name="form[0][search_type]">
                            <option value="text">text</option>
                            <option value="select">select</option>
                            <option value="date">date</option>
                        </select>
                    </div>
                </td>
                <td title="勾选后在验证器和前端生成必填校验规则">
                    <div class="radio-box" style="display:block;margin-top: -10px;margin-left: 45%">
                        <input type="checkbox" name="form[0][require]" value="1" class="form-require">
                    </div>
                </td>
                <td title="插件的datatype配置项">
                    <input type="text" class="input-text form-validate-datatype" placeholder="正则或预定义规则"
                           name="form[0][validate][datatype]">
                </td>
                <td title="插件的nullmsg配置项">
                    <input type="text" class="input-text" placeholder="必填时为空提示信息" name="form[0][validate][nullmsg]">
                </td>
                <td title="插件的errormsg配置项">
                    <input type="text" class="input-text" placeholder="格式错误时提示信息" name="form[0][validate][errormsg]">
                </td>
            </tr>
            </tbody>
        </table>

        <?php if(!\think\Request::instance()->param('table')): ?>
        <h2>数据表信息 ：</h2>
        <div class="row cl">
            <label class="form-label col-xs-1">数据表：</label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="radio-box" title="会在数据库自动创建相应模型的数据表">
                    <input type="checkbox" name="create_table" value="1" checked>
                    <label>创建数据表</label>
                </div>
                <div class="radio-box" title="勾选此项后无论表是否存在都会删除原表强制创建新表，不勾选只在表不存在时才创建新表，慎重选择，如果创建失败会自动回滚">
                    <input type="checkbox" name="create_table_force" value="1">
                    <label>强制建表</label>
                </div>
                <button type="button" class="btn btn-warning op-sync" title="将表单元素里的字段自动填充到表字段里，会清空原表字段的数据，谨慎操作">
                    同步字段
                </button>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1"></label>
            <div class="formControls col-xs-8">
                <span class="c-red">勾选强制建表后无论表是否存在都会删除原表强制创建新表，不勾选只在表不存在时才创建新表，慎重选择</span>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1"></label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="select-box" style="width: 150px">
                    <select name="table_engine" class="select">
                        <option value="InnoDB">InnoDB</option>
                        <option value="MyISAM">MyISAM</option>
                        <option value="MRG_MYISAM">MRG_MYISAM</option>
                        <option value="MEMORY">MEMORY</option>
                        <option value="ARCHIVE">ARCHIVE</option>
                    </select>
                </div>
                <input type="text" class="input-text" style="width: 45%" name="table_name" title="不填写由控制器名自动生成"
                       placeholder="不填写由控制器名自动生成">
            </div>
            <div class="col-xs-3"></div>
        </div>
        <table class="table-table table table-border table-bordered table-hover table-bg mt-20 skin-minimal">
            <thead>
            <tr class="text-c">
                <th width="110" title="删除后不可恢复，谨慎操作">操作<br>
                    <a href="javascript:;" class="label label-success radius op-add" data-type="field" data-header="1">增加一栏</a>
                </th>
                <th width="130" title="只能小写字符和下划线，例如 user_id"><span class="c-red">*</span> 名称</th>
                <th width="130" title="字段类型+大小，例如 varchar(255) , int(10) , text"><span class="c-red">*</span> 类型</th>
                <th width="130" title="为NULL表示不设默认值，不区分大小写">默认值</th>
                <th width="90" title="勾选后生成 NOT NULL">不是 null</th>
                <th width="90" title="勾选后生成索引">索引</th>
                <th width="130" title="设置字段备注">备注</th>
                <th width="130" title="扩展属性，例如 unsigned , auto_increment">扩展属性</th>
            </tr>
            </thead>
            <tbody id="tbody-field">
            <tr>
                <td title="删除后不可恢复，谨慎操作">
                    <a href="javascript:;" class="label label-success radius mr-10 op-add" data-type="field">增加一栏</a>
                    <a href="javascript:;" class="label label-danger radius op-delete">删除</a>
                </td>
                <td title="只能小写字符和下划线，例如 user_id">
                    <input type="text" class="input-text field-name" placeholder="字段名称" name="field[0][name]">
                </td>
                <td title="字段类型+大小，例如 varchar(255) , int(10) , text">
                    <input type="text" class="input-text" placeholder="例如varchar(255)" value="varchar(255)" name="field[0][type]">
                </td>
                <td title="为NULL表示不设默认值，不区分大小写">
                    <input type="text" class="input-text" placeholder="为NULL表示不设默认值" name="field[0][default]"
                           value="NULL">
                </td>
                <td title="勾选后生成 NOT NULL">
                    <div class="radio-box" style="display:block;margin-top: -10px;margin-left: 45%">
                        <input type="checkbox" name="field[0][not_null]" value="1">
                    </div>
                </td>
                <td title="勾选后生成索引">
                    <div class="radio-box" style="display:block;margin-top: -10px;margin-left: 45%">
                        <input type="checkbox" name="field[0][key]" value="1">
                    </div>
                </td>
                <td title="设置字段备注">
                    <input type="text" class="input-text field-comment" placeholder="备注" name="field[0][comment]">
                </td>
                <td title="扩展属性，例如 unsigned , auto_increment">
                    <input type="text" class="input-text" placeholder="例如unsigned" name="field[0][extra]">
                </td>
            </tr>
            </tbody>
        </table>
        <?php endif; ?>
        <h2>其他选项</h2>
        <div class="row cl">
            <label class="form-label col-xs-1">首页菜单：</label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="radio-box">
                    <input type="checkbox" name="menu[]" id="radio-0" value="add" checked>
                    <label for="radio-0">添加</label>
                </div>
                <div class="radio-box">
                    <input type="checkbox" name="menu[]" id="radio-1" value="forbid" checked>
                    <label for="radio-1">禁用</label>
                </div>
                <div class="radio-box">
                    <input type="checkbox" name="menu[]" id="radio-2" value="resume" checked>
                    <label for="radio-2">恢复</label>
                </div>
                <div class="radio-box">
                    <input type="checkbox" name="menu[]" id="radio-3" value="delete" checked>
                    <label for="radio-3">删除</label>
                </div>
                <div class="radio-box" title="勾选回收站会自动创建回收站">
                    <input type="checkbox" name="menu[]" id="radio-4" value="recycleBin" checked>
                    <label for="radio-4">回收站</label>
                </div>
                <div class="radio-box" title="勾选保存排序后对于有sort字段的表自动给添加快速排序功能">
                    <input type="checkbox" name="menu[]" id="radio-5" value="saveOrder" checked>
                    <label for="radio-5">保存排序</label>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1">创建模型：</label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="radio-box">
                    <input type="checkbox" name="model" value="1">
                    <label title="会自动创建相应的模型，并且自动添加字段create_time，update_time，并且开启时间戳记录">创建模型（model）</label>
                </div>
                <div class="radio-box" title="勾选模型了该配置项才会生效，勾选此项后会自动生成create_time,update_time字段，并且自动写入时间戳到数据库">
                    <input type="checkbox" name="auto_timestamp" value="1">
                    <label>自动时间戳记录</label>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-1">验证器：</label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="radio-box">
                    <input type="checkbox" name="validate" value="1">
                    <label title="只自动添加必填规则，其他规则太复杂，会留空，请到验证器手动完善">创建验证器（validate）（默认自动生成前端一致的验证规则）</label>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-1">删除代码：</label>
            <div class="formControls col-xs-8 skin-minimal">
                <div class="radio-box">
                    <input type="checkbox" name="delete_file" value="1">
                    <label title="删除刚刚自动生成的文件、数据表，如果涉及文件夹为了安全不会递归删除，如果有表，若为选择强制建表不会删除原来的表，如果要删除刚刚自动生成的数据表请勾选强制删除后再点删除代码">删除不带回收站功能，请谨慎操作</label>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-xs-offset-1">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;确认创建&nbsp;&nbsp;</button>
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
        table_fixed('.table-form');
        table_fixed('.table-table');
        $(".db-table").find("[value='<?php echo \think\Request::instance()->param('table'); ?>']").attr("selected",true);

        // 获取模板
        var template = {}, index = {};
        template['form'] = $("#tbody-form").html();
        template['field'] = $("#tbody-field").html();
        index['form'] = 0;
        index['field'] = 0;

        // 初始化表单验证
        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret) {
                ajax_progress(ret, function () {
                    layer.alert('您接下来是要继续生成下一个控制器还是继续停留？', {
                        btn: ['继续生成', '查看', '停留在此页'], //按钮
                        yes: function (i) {
                            location.reload();
                            layer.close(i);
                        },
                        btn2: function (i) {
                            window.open(ret.data.action);
                            return false;
                        }
                    });
                });
            }
        });
        function form_init() {
            $('.skin-minimal input').iCheck('destroy');
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });
        }

        // 一定要在获取模板后在初始化，否则会出现错误
        form_init();
        // 增加一栏
        $(document).on("click", ".op-add", function () {
            var type = $(this).attr("data-type");
            var html = template[type].replace(/(\[\d+\])/g, '[' + (++index[type]) + ']');
            // 表头菜单，追加到第一个
            if ($(this)[0].hasAttribute('data-header')) {
                $("#tbody-" + type).prepend(html);
            } else {
                $(this).closest('tr').after(html);
            }
            form_init();
        }).on("click", ".op-delete", function () {
            // 删除一栏
            $(this).closest("tr").fadeOut(undefined, undefined, function () {
                // 使用回调函数，强行移除该DOM
                $(this).remove();
            });
            form_init();
        }).on("change", ".form-require", function () {
            // 必填项自动加*
            var $this = $(this);
            var formValidate = $this.closest("tr").find(".form-validate-datatype");
            var formValidateVal = formValidate.val();
            if ($this.prop('checked')) {
                if (formValidateVal) {
                    if (formValidateVal.substring(0, 1) != "*") {
                        formValidate.val("*|" + formValidateVal);
                    }
                } else {
                    formValidate.val("*");
                }
            } else {
                if (formValidateVal.length == 1) {
                    formValidate.val("");
                } else {
                    formValidate.val(formValidateVal.substring(2));
                }
            }
        }).on("click", ".op-sync", function () {
            // 自动同步
            var objField = $("#tbody-field");
            objField.find('tr').remove();
            $("#tbody-form").find('tr').each(function () {
                objField.append(template['field'].replace(/(\[\d+\])/g, '[' + (++index['field']) + ']'));
                var objCurrent = objField.find('tr:last');
                objCurrent.find('.field-comment').val($(this).find('.form-title').val());
                objCurrent.find('.field-name').val($(this).find('.form-name').val());
            });
            form_init();
        }).on('click', '.db-jump', function () {
            location.href = '<?php echo \think\Url::build("index"); ?>?table=' + $('.db-table').val();
        });

        <?php if(isset($table_info)): ?>
            var tableInfo = <?php echo $table_info; ?>;
            var objForm = $("#tbody-form");
            objForm.find('tr').remove();
            for (var i = 0; i < tableInfo.fields.length; i++) {
                objForm.append(template['form'].replace(/(\[\d+\])/g, '[' + (++index['form']) + ']'));
                var objCurrent = objForm.find('tr:last');
                objCurrent.find('.form-name').val(tableInfo.fields[i]);
            }
        <?php endif; ?>
    })
</script>

</body>
</html>