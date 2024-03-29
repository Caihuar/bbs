<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>论坛管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/Public/Admin/favicon.ico" type="image/x-icon" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="/Public/Admin/css/x-admin.css" media="all">
</head>
<body>
<div class="layui-layout layui-layout-admin">
  <div class="layui-header header header-demo">
    <div class="layui-main">
    <div class="admin-logo-box">
				<a class="logo" href="http://www.kuxuebao.net" title="logo">阳光成单系统</a>
				<div class="larry-side-menu">
					<i class="fa fa-th-large" aria-hidden="true"></i>
				</div>
			</div>
            <ul class="layui-nav layui-layout-left layui-ygyd-menu" style="position:absolute; left:250px;">
      <li class="layui-nav-item"><a href="">合作机构</a></li>
      <li class="layui-nav-item"><a href="javascript:;">订单管理</a></li>
      <li class="layui-nav-item"><a href="">统计报表</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">系统管理</a>
        <dl class="layui-nav-child">
          <dd><a href="">角色管理</a></dd>
          <dd><a href="">权限设置</a></dd>
          <dd><a href="">日志管理</a></dd>
        </dl>
      </li>
    </ul>
    
      <ul class="layui-nav" lay-filter="">
      <!-- <li class="layui-nav-item">
                        <a href="" title="消息">
                            <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                        </a>
                        </li> -->
        <li class="layui-nav-item"><img src="/Public/Admin/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
        <li class="layui-nav-item"> <a href="javascript:;"><?php echo ($_SESSION['admin_info']['admin_name']); ?></a>
          <dl class="layui-nav-child">
            <!-- 二级菜单 -->
            <dd><a href="">个人信息</a></dd>
            <dd><a href="">切换帐号</a></dd>
            <dd><a href="/index.php/Admin/Login/login">退出</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item x-index"><a href="/">前台首页</a></li>
      </ul>
    </div>
  </div>
  <div class="layui-side layui-bg-black x-side" style="left:-200px;">
    <div class="layui-side-scroll">
      <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
      <?php if(is_array($_SESSION['top'])): $i = 0; $__LIST__ = $_SESSION['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="layui-nav-item"> <a class="javascript:;" href="javascript:;"> <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite><?php echo ($v["auth_name"]); ?></cite> </a>
          <?php if(is_array($_SESSION['second'])): $i = 0; $__LIST__ = $_SESSION['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i; if( $v["id"] == $i["pid"] ): ?><dl class="layui-nav-child">
            <dd class="">
            <dd class=""> <a href="javascript:;" _href="/index.php/Admin/<?php echo ($i["contro"]); ?>/<?php echo ($i["method"]); ?>"> <cite><?php echo ($i["auth_name"]); ?></cite> </a> </dd>
            </dd>
          </dl><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true" style="left: 0px;border-left: solid 2px #2299ee;">
    <ul class="layui-tab-title">
      <li class="layui-this"> 我的桌面 <i class="layui-icon layui-unselect layui-tab-close">ဆ</i> </li>
    </ul>
    <div class="layui-tab-content site-demo site-demo-body">
      <div class="layui-tab-item layui-show">
        <iframe frameborder="0" src="/index.php/Admin/We/index?a=1" class="x-iframe" style="height: 80%">
        </iframe>
      </div>
    </div>
  </div>
  <div class="site-mobile-shade"> </div>
</div>
<script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script> 
<script src="/Public/Admin/js/x-admin.js"></script> 
</body>
</html>