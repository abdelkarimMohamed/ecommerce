<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>title</title>
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/jquery.selectBoxIt.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/backend.css" />
	</head>
<body>

	<form class="login" action="<?php echo base_url('home/post_login') ?>" method='POST'>
		<h4 class="text-center">Admin Login</h4>
		<input class="form-control" type="text" name="user" placeholder="Username" />
		<input class="form-control" type="password" name="pass" placeholder="password"/>
		<input class="btn btn-primary btn-block" type="submit" value="Login"/>

	</form>

	<div class="footer">
		
	</div>
	<script src="<?php echo base_url() ?>/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url() ?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() ?>/js/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>

</body>

</html>