<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>WAG | Register Page</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="errors.css">
	<body>
		<div class="loginbox">
			<img src="userico.png" class="avatar">
			<h1>انشاء حساب</h1>
			<form action="register.php" method="POST">
            	<?php include('errors.php'); ?>
				<input type="text" name="username" placeholder="اسم المستخدم">

				<input type="email" name="email" placeholder="البريد الاكتروني">

				<input type="password" name="password_1" placeholder="كلمة المرور">

				<input type="password" name="password_2" placeholder="اعد كتابة كلمة المرور">
				<input type="submit" name="reg_btn" value="تسجيل">
				<a href="login.php">لديك حساب بالفعل ?</a>
			</form>

		</div>
	</body>
</head>
</html>