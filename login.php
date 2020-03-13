<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>WAG | login page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="errors.css">
</head>
	
	<body>
		<div class="loginbox">
			<img src="userico.png" class="avatar">
			<h1>تسجيل الدخول</h1>
			<form action="login.php" method="POST">
            <?php include('errors.php'); ?>
				<input type="text" name="username" placeholder="اسم المستخدم">
				<input type="password" name="password" placeholder="كلمة المرور">
				<input type="submit" name="login_btn" value="تسجيل الدخول">
			<!--	<a href="#">نسيت كلمة السر?</a><br> -->
				<a href="register.php">ليس لديك حساب?</a>
			</form>

		</div>
	</body>
</html>