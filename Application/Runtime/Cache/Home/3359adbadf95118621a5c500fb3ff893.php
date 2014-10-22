<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>User  注册register</title>
</head>
<link rel="stylesheet" href="/99m/Public/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/99m/Public/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
<body>


<div class="container">
	<h1>User  注册register</h1>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form" id="653596352" class="form-inline" action="<?php echo U('Home/User/register');?>" method="post">
				<div class="form-group">
					 <label for="username">用户名：</label><input type="text" class="form-control" id="username" name="username"/>
				</div>
				<div class="form-group">
					 <label for="userpwd">密码：</label><input type="password" class="form-control" id="userpwd" name="userpwd"/>
				</div>
				<div class="form-group">
					 <label for="userpwd2">确认密码：</label><input type="password" class="form-control" id="userpwd2" name="userpwd2"/>
				</div>				
				<button id="btn" type="button" class="btn btn-default">注册</button>

			</form>
		</div>
	</div>
	<div id="notice" >
  		<label id="notice2"></label>
	</div>
</div>
</body>
<script src="/99m/Public/jquery/1.11.1/jquery.min.js"></script>
<script src="/99m/Public/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<script>
$(function(){
	$('#btn').click(function  () {
		//alert($('#username').val());
		$uname= $('#username').val();
		$upwd= $('#userpwd').val();
		$upwd2= $('#userpwd2').val();
		$action=$('#653596352').attr('action');
		//console.log($uname);
		//console.log($upwd);
		//console.log($upwd2);
		//console.log($action);
		$.post($action,{username:$uname, userpwd:$upwd, userpwd2:$upwd2},function(data){
			console.log(data);
			$('#notice2').html(data.info);
			//if (data.status==0) {$('#notice').show();
			//	console.log('testing');
				//$('#notice').attr('class','alert alert-warning');

				//$('#notice').removeClass();
				//$('#notice').addClass('alert alert-warning');
				//$('#notice').attr('style','display:visible');
				//$('#notice').className='alert alert-warning alert-dismissible';
				//$('#notice').setAttribute("className","alert alert-warning");
			//}else{
			//	$('#notice2').html(data.info);
			}
			);
		//return false;
	})
})



</script>
</html>