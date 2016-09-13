<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网管会后台管理首页</title>
	<link rel="stylesheet" href="__TMPL__/Admin/public/css/admin.css" />
	<script type="text/javascript" src="__TMPL__/Admin/public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/Admin/public/js/admin.js"></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font" style="text-align: center">网管会后台管理首页</p>
		</div>
		<div class="top_bar">
			<p class="adm">
				<span>管理员：</span>
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people"><?php echo ($_SESSION['admin_name']); ?></span>
			</p>
			<p class="now_time">
				您的当前位置是：
				<span>首页</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="__APP__/Admin/logout" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<div class="menu_box">
				<h2>常用菜单</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="__APP__/Index/index" class="pos">前台首页</a>
				        </li> 
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="__APP__/Admin/manage_student" class="pos">管理用户</a>
				        </li> 
				    </ul>
				</div>
			</div>
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src=""></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@电子科技大学网络管理委员会 © </p>
		</div>
	</div>

</body>
</html>
<!--[if IE 6]>
    <script type="text/javascript" src="__TMPL__/Admin/public/js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->