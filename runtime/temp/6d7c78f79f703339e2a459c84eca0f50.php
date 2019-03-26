<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:67:"D:\lp\WWW\tpAdmin\public/../application/admin\view\order\index.html";i:1546929288;s:69:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\base.html";i:1488899632;s:80:"D:\lp\WWW\tpAdmin\public/../application/admin\view\template\javascript_vars.html";i:1488899632;s:66:"D:\lp\WWW\tpAdmin\public/../application/admin\view\order\form.html";i:1546939545;s:64:"D:\lp\WWW\tpAdmin\public/../application/admin\view\order\th.html";i:1546860326;s:64:"D:\lp\WWW\tpAdmin\public/../application/admin\view\order\td.html";i:1546861855;}*/ ?>
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
    <form class="mb-20" method="get" action="<?php echo url("","",true,false);?>">
    <input type="text" class="input-text" style="width:250px" placeholder="用户名称" name="user_id" value="<?php echo \think\Request::instance()->param('user_id'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="订单编号" name="order_no" value="<?php echo \think\Request::instance()->param('order_no'); ?>" >
    <div class="select-box" style="width:250px">
        <select name="order_status" class="select">
            <option value="">订单状态</option>
            <?php foreach($orderStatus as $vo): ?>
            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>

    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo isset($count) ? $count :  '0'; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="">编号</th>
<th width="">用户名称</th>
<th width="">订单编号</th>
<th width="">价格</th>
<th width="">车牌号</th>
<th width="">支付状态</th>
<th width="">支付方式</th>
<th width="">订单状态</th>
<th width="">支付时间</th>
<th width="">创建时间</th>
<th width="">更新时间</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo high_light($vo['user_id'],\think\Request::instance()->param('user_id')); ?></td>
<td><?php echo high_light($vo['order_no'],\think\Request::instance()->param('order_no')); ?></td>
<td><?php echo $vo['price']; ?></td>
<td><?php echo $vo['bus_num']; ?></td>
<td><?php echo !empty($vo['is_pay'])?'是':'否'; ?></td>
<td><?php echo $payMode[$vo['pay_mode']]['name']; ?></td>
<td><?php echo $orderStatus[$vo['order_status']]['name']; ?></td>
<td><?php echo $vo['pay_time']; ?></td>
<td><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></td>
<td><?php echo date("Y-m-d H:i:s",$vo['update_time']); ?></td>
            <td class="f-14">
                <?php if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>