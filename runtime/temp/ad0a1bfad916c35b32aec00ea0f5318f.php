<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:72:"D:\lp\WWW\tpAdmin\public/../application/admin\view\agent\recyclebin.html";i:1546824175;s:75:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\recyclebin.html";i:1488899632;s:69:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\base.html";i:1488899632;s:80:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\javascript_vars.html";i:1488899632;s:66:"D:\lp\WWW\tpAdmin\public/../application/admin\view\agent\form.html";i:1546824175;s:64:"D:\lp\WWW\tpAdmin\public/../application/admin\view\agent\th.html";i:1546824175;s:64:"D:\lp\WWW\tpAdmin\public/../application/admin\view\agent\td.html";i:1546841159;}*/ ?>
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
    <form class="mb-20" method="get" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="代理类型" name="agent_type" value="<?php echo \think\Request::instance()->param('agent_type'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="代理人姓名" name="agent_name" value="<?php echo \think\Request::instance()->param('agent_name'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="联系电话" name="phone" value="<?php echo \think\Request::instance()->param('phone'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="公司名称" name="company_name" value="<?php echo \think\Request::instance()->param('company_name'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="审核状态" name="check_status" value="<?php echo \think\Request::instance()->param('check_status'); ?>" >
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('recycle')) : ?><a class="btn btn-success radius mr-5" href="javascript:;" onclick="recycle_all('<?php echo \think\Url::build('recycle', []); ?>')"><i class="Hui-iconfont">&#xe610;</i> 还原</a><?php endif; if (\Rbac::AccessCheck('deleteforever')) : ?><a href="javascript:;" onclick="del_forever_all('<?php echo \think\Url::build('deleteforever', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 彻底删除</a><?php endif; if (\Rbac::AccessCheck('clear')) : ?><a href="javascript:;" onclick="clear_recyclebin('<?php echo \think\Url::build('clear', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 清空回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo $count; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width=""><?php echo sort_by('编号','id'); ?></th>
<th width="">代理类型</th>
<th width="">代理人姓名</th>
<th width="">联系电话</th>
<th width="">公司名称</th>
<th width="">审核状态</th>
<th width="">备忘</th>
<th width="">创建时间</th>
<th width="">审核时间</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo $agentType[$vo['agent_type']]['name']; ?></td>
<td><?php echo high_light($vo['agent_name'],\think\Request::instance()->param('agent_name')); ?></td>
<td><?php echo high_light($vo['phone'],\think\Request::instance()->param('phone')); ?></td>
<td><?php echo high_light($vo['company_name'],\think\Request::instance()->param('company_name')); ?></td>
<td><?php echo $statusType[$vo['check_status']]['name']; ?></td>
<td><?php echo $vo['memo']; ?></td>
<td><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></td>
<td><?php echo date("Y-m-d H:i:s",$vo['check_time']); ?></td>
            <td class="f-14">
                <?php if (\Rbac::AccessCheck('recycle')) : ?> <a href="javascript:;" onclick="recycle(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('recycle', []); ?>')" class="label label-success radius ml-5">还原</a><?php endif; if (\Rbac::AccessCheck('deleteforever')) : ?> <a href="javascript:;" onclick="del_forever(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('deleteforever', []); ?>')" class="label label-danger radius ml-5">彻底删除</a><?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo $page; ?></div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>