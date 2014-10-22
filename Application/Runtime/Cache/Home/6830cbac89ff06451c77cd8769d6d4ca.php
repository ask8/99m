<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>User 登录</title>
</head>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<body>

<div class="container">
	<h1>User 登录</h1>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form" id="loginform"  class="form-inline" action="<?php echo U('Home/User/login');?>" method="post">
				<div class="form-group">
					 <label for="username">用户名：</label><input type="text" class="form-control" id="username" name="username"/>
				</div>
				<div class="form-group">
					 <label for="userpwd">密码：</label><input type="password" class="form-control" id="userpwd" name="userpwd"/>
				</div>
				<button type="button" id="btn" class="btn btn-default">登录</button>
			</form>
			<p></p>
			<div class="alert alert-info" role="alert">
				<p id="notice">请输入用户名和密码</p>
			</div>
		</div>
		

	</div>
</div>	
</body>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script >
$(function () {
	$('#btn').click(function () {

		$action= $('#loginform').attr('action');
		$username= $('#username').val();
		$userpwd= $('#userpwd').val();
		console.log($action+" "+$username+" "+$userpwd);

		$.post($action,{username:$username,userpwd:$userpwd},function (data) {
			console.log(data);
			$('#notice').html(data.info);
		});
	})
	// body...
})

</script>
</html>