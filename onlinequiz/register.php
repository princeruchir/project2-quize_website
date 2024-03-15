<?php
include("database.php");
session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$name = stripslashes($name);
	$name = addslashes($name);

	$email = $_POST['email'];
	$email = stripslashes($email);
	$email = addslashes($email);

	$password = $_POST['password'];
	$password = stripslashes($password);
	$password = addslashes($password);

	$college = $_POST['college'];
	$college = stripslashes($college);
	$college = addslashes($college);
	$str = "SELECT email from user WHERE email='$email'";
	$result = mysqli_query($con, $str);

	if ((mysqli_num_rows($result)) > 0) {
		echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
		header("refresh:0;url=login.php");
	} else {
		$str = "insert into user set name='$name',email='$email',password='$password',college='$college'";
		if ((mysqli_query($con, $str)))
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
		header('location: welcome.php?q=1');
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register | Online Quiz System</title>
	<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="css/form.css">
	<style type="text/css">
		body {
			width: 100%;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background: url(jason-leung-Xaanw0s0pMk-unsplash.jpg);
        height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
		}

		body {
			width: 100%;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background: url(RP.jpg);
        height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
		}

		h4 {
			text-align: center;
			padding: 5px 0px;
			color: white;
			background-color: #FEE715;
			margin: 0%;
			font-size: 23px;
		}

		.sid{
            color: red;
            background-color: #FCF6F5;
        }

		.box .box-body {
			padding: 30px;
			padding-bottom: 15px;
		}
	</style>
</head>

<body>
	<section class="login first grey">
		<div class="container">
			<div class="box-wrapper">
				<div class="box box-border">
					<center>
					<h4 class="sid">QUIZGENIUS</h4>

						<h4 style="font-family: Noto Sans;">USER REGISTRATION</h4>
					</center>
					<div class="box-body">
						<form method="post" action="register.php" enctype="multipart/form-data">
							<div class="form-group">
								<label>Enter Your Username:</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Your Username" required />
							</div>
							<div class="form-group">
								<label>Enter Your Email Id:</label>
                                <input type="email" name="email" class="form-control"  placeholder="Enter Your Email Id" required>
							</div>
							<div class="form-group">
								<label>Enter Your Password:</label>
                                <input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="Enter Your Password" required>
							</div>
							<div class="form-group">
								<label>Enter Your College Name:</label>
								<input type="text" name="college" class="form-control" placeholder="Enter Your College Name" required />
							</div>

							<div class="form-group text-right">
								<button class="btn btn-primary btn-block" name="submit" style="width: 50%; padding:8px; margin-left: 25%; border-radius: 13px; ">Register</button>
							</div>
							<div class="form-group text-center">
								<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="scripts/bootstrap/bootstrap.min.js"></script>
</body>

</html>