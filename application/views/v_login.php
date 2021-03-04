<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?> ">
</head>
<body>
	<div class="box">
		<h2>Login</h2>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			<div class="inputBox">
				<input type="text" name="username" class="form-control">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" class="form-control">
				<label>Password</label>
			</div>
			<center><input type="submit" name="" value="Login" ></center>
		</form>
	</div>
</body>
</html>