<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo $pagename . ' - ' . SITENAME ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/stylesheets/global.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/stylesheets/main.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/stylesheets/product.css');?>">
	<script type="text/javascript" src="<?php echo base_url('public/javascripts/jquery-1.7.2.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/javascripts/md5.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/javascripts/address.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/javascripts/product.js');?>"></script>
</head>
<body>
	<div class="body">
		<div id="navbar" class="navbar">
			<?php
			$img_tri = base_url('public/images/tri.png');
			?>
			<div id="p0" class="part">
				<p class="navbutton">商品选购&nbsp;<img src="<?php echo $img_tri; ?>"></p>
				<ul class="itemlist">
					<?php echo anchor('/product/', '商品分类');?>
					<a>常购商品</a>
				</ul>
			</div>
			<div id="p1" class="part">
				<p class="navbutton">订单管理&nbsp;<img src="<?php echo $img_tri; ?>"></p>
				<ul class="itemlist">
					<a>我的订单</a>
				</ul>
			</div>
			<div id="p2" class="part">
				<p class="navbutton">数据报表&nbsp;<img src="<?php echo $img_tri; ?>"></p>
				<ul class="itemlist">
					<a>年度报表</a>
				</ul>
			</div>
			<div id="p3" class="part">
				<p class="navbutton">系统公告&nbsp;<img src="<?php echo $img_tri; ?>"></p>
				<ul class="itemlist">
					<a>优惠通知</a>
				</ul>
			</div>
			<div id="p4" class="part">
				<p class="navbutton">系统管理&nbsp;<img src="<?php echo $img_tri; ?>"></p>
				<ul class="itemlist">
					<?php echo anchor('/main/', '账户信息管理');?>
					<?php echo anchor('/address/','送货信息管理','');?>
					<a>用户信息管理</a>
					<a>审批流程管理</a>
					<a>定制商品分类</a>
					<a>定制服务设置</a>
				</ul>
			</div>
			<div id="p5" class="part">
				<p class="navbutton"><?php echo anchor('/log/logout', '退出登录');?></p>
			</div>
		</div>