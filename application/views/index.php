<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo SITENAME ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/stylesheets/global.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/stylesheets/index.css');?>">
	<script type="text/javascript" src="<?php echo base_url('public/javascripts/md5.js');?>"></script>
</head>
<body>
	<div class="board">
		<div class="topbar">
			<p class="logo">订单系统</p>
			<p class="link">
				官方首页&nbsp;&nbsp;|&nbsp;&nbsp;官方论坛
				&nbsp;&nbsp;|&nbsp;&nbsp;意见反馈&nbsp;&nbsp;|&nbsp;&nbsp;联系我们
				&nbsp;&nbsp;|&nbsp;&nbsp;关于我们
			</p>
		</div>
		<div class="midpart">
			<div class="logbox">
				<?php echo validation_errors(); ?>
				<?php 
					$attributes = array('onsubmit'=>'return trans();');
					echo form_open('log/checkLogin', $attributes); 
				?>
					<p class="logbox_title">用户登录</p>
					<p class="login_result"><?php echo $wrongPwd;?></p>
					<ul class="form_component">
						<label class="label" for="">用户</label><input class="inputbox" type="text" name="user" id="user">
						<br>
						<label class="label" for="">密码</label><input class="inputbox" type="password" name="pwd" id="pwd">
						<br>
						<input class="button" type="submit" value="登   录">&nbsp;&nbsp;
						忘记密码了？快点击&nbsp;<a href="#">这里</a>&nbsp;吧！
						<br>
						<!-- 还有其它疑问？前往&nbsp;<a href="#">官方论坛</a>&nbsp;求助吧！ -->
					</ul>
				</form>
			</div>
			<div class="noteboard">
				<p class="note_title">智能Intelligent</p>
				<p class="note_content">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
					我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？我勒个去哪里智能了？
				</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<li class="footer_left">Powered By C860 - HCI人机交互中心</li>
		<li class="footer_right">
			联系我们&nbsp;|&nbsp;网站地图&nbsp;|&nbsp;返回首页&nbsp;|&nbsp;投诉举报&nbsp;|&nbsp;意见建议<br>
			Latest update:&nbsp;GMT+8, 2013-5-12 12:20
		</li>
	</div>
</body>
</html>