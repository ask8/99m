<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>User  关于about</title>
</head>
<link rel="stylesheet" href="/99m/Public/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/99m/Public/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
<body>

<div class="container">
	<h1>User  关于about</h1>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form" id="653596352" class="form-inline" action="<?php echo U('Home/User/about');?>" method="post">
				<div class="form-group">
					 <label for="username">检查用户</label><input type="text" class="form-control" id="username" name="username"/>

					 <span id="notice" class="label label-success">Label</span>
					 <span id="notice2" class="label label-warning">Label</span>
				</div>
				
				<button id="btn" type="button" class="btn btn-default">用户是否存在</button>
			</form>
		</div>
	</div>

</div>
</body>
<script src="/99m/Public/jquery/1.11.1/jquery.min.js"></script>
<script src="/99m/Public/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<script>
$('#notice').hide();

$(function(){
	$('#btn').click(function  () {
		$uname= $('#username').val();
		$action=$('#653596352').attr('action');
		console.log($action);

		$.post($action,{username:$uname}, function(data){
				if (data=='用户存在') {
					console.log(data);
					//$('#notice').attr('style','display:inline');
					$('#notice').removeClass();
					$('#notice').addClass('label label-warning');
				}else{
					$('#notice').removeClass();
					$('#notice').addClass('label label-success');
				}
				$('#notice').html(data);
				$('#notice').show();
			});
		//return false;
	})

})

</script>
</html>