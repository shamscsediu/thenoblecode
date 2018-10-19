<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up here</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
       <?php include('helper/header.php'); ?>
			<section id="sect">
				<div id="form-box">
					<div id="form-title">
						 <span>Register Here</span>
					</div>
					<form action="" method="POST">
						<input type="text" placeholder="Your First Name" name="fname"> <br>
						<input type="text" placeholder="Your Last Name" name="lname"> <br>
				    	<input type="email" placeholder="Enter your Email" name="email"> <br>
				    	<input type="password" placeholder="Your Password" name="psw"> <br>
						<input type="password" placeholder="Retype Password" name="psw"> <br>
						<input id="submit" type="submit" value="Sign Up">
					</form>
				</div>
			</section>
		</div>
</body>
</html>