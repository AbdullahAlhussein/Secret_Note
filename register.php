<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>SN | Register</title>
	<!-- https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use -->
	<link rel="stylesheet" type="text/css" href="resources/css/fontawesome/all.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	<style>
		/* Phones */
		@media screen and (min-width:320px) and (max-width:443px) {

			.box {
				width: 90%;
				margin-top: 110px;
				margin-bottom: 120PX;
				margin-left: 20px;
				margin-right: 5px;
			}

			img {
				margin-top: 105px;
				margin-left: 80px;
			}
		}

		@media screen and (min-width:444px) and (max-width:539px) {

			.box {
				margin-top: 120px;
				margin-bottom: 120PX;
				margin-left: 30px;
				margin-right: 10px;
				border-radius: 20px;
			}

			img {
				margin-top: 115px;
				margin-left: 100px;
			}

		}

		@media screen and (min-width:540px) and (max-width:680px) {

			.box {
				padding-top: 59px;
				padding-bottom: 59px;
				padding-right: 45px;
				padding-left: 45px;
				margin-top: 100px;
				margin-bottom: 100PX;
				margin-left: 90px;
				margin-right: 10px;
			}

			img {
				margin-top: 95px;
				margin-left: 100px;
			}
		}

		@media screen and (min-width:681px) and (max-width:767px) {

			.box {
				margin-top: 110px;
				margin-bottom: 70PX;
				margin-left: 180px;
				margin-right: 10px;
				border-radius: 20px;
			}

			img {
				margin-top: 110px;
				margin-left: 100px;
			}
		}

		/* Tablets */
		@media screen and (min-width:768px) and (max-width:900px) {
			.box {
				margin-top: 100px;
				margin-bottom: 100PX;
				margin-left: 210px;
				margin-right: 10px;
			}

			img {
				margin-top: 95px;
				margin-left: 100px;
			}
		}

		@media screen and (min-width:901px) and (max-width:1024px) {

			.box {
				margin-top: 100px;
				margin-bottom: 100PX;
				margin-left: 280px;
				margin-right: 10px;
			}

			img {
				margin-top: 95px;
				margin-left: 100px;
			}
		}

		@media screen and (min-width:1025px) and (max-width:1436px) {

			.box {
				margin-top: 150px;
				margin-bottom: 100PX;
				margin-left: 400px;
				margin-right: 10px;
			}

			img {
				margin-top: 145px;
				margin-left: 100px;
			}
		}
	</style>
</head>

<body>
	<div class="box">
		<!-- image and text sign up -->
		<img src="resources/images/signup.png" alt="image-sign-up">
		<p> Fill your information </p>
		<!-- Form information  -->
		<form method="POST" action="register.php">
			<div class="form-input">
				<input type="username" placeholder="Name" name="name" autofocus required>
				<i class="far fa-user"></i>
			</div>
			<div class="form-input">
				<input type="email" placeholder="Email" name="email" autocomplete="on" required>
				<i class="far fa-envelope"></i>
			</div>
			<div class="form-input">
				<input type="password" placeholder="Password" name="password" required>
				<i class="fas fa-lock"></i>
			</div>
			<div class="form-input">
				<input type="password" placeholder=" Rewrite Password" name="passwordconf" required>
				<i class="fas fa-lock"></i>
			</div>
			<input class="submit" type="submit" value="submit" name="register">
		</form>
	</div>

</body>

</html>