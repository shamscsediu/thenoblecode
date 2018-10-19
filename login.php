<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Here</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
			<?php include('helper/header.php') ?>
			<section id="sect">
				<div id="form-box">
					<div id="form-title">
						 <span>Signin</span>
					</div>
					<form action="" method="POST">
						<input type="email" placeholder="Enter Email" name="email"> <br>
						<input type="Password" placeholder="Enter Password" name="psw"> <br>
						<input id="submit" type="submit" value="Login">
					</form>
				</div>
			</section>
		</div>
</body>
</html>