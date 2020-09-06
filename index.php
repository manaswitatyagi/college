<?php
	session_start();
	if(isset($_SESSION['username']))
		unset($_SESSION['username']);
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>College Shiksha</title>
		<link rel="stylesheet" type="text/css" href="Login.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div>
			<div class="form" id="login">
				<div class="box">
					<h3>LOGIN</h3>
					<div class="social-container">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<div>
						<?php
							function test_input($data)
							{
								$data=trim($data);
								$data=stripcslashes($data);
								$data=htmlspecialchars($data);
								return $data;
							}
							if(isset($_POST['login']))
							{
								session_start();
								$username=$password="";
								if($_SERVER["REQUEST_METHOD"] == "POST")
								{
									$username = test_input($_POST['Username']);
									$password = test_input($_POST['Password']);

									$link = mysqli_connect("localhost", "root", "");
									if (mysqli_connect_errno()) {
										printf("Connect failed: %s\n", mysqli_connect_error());
										exit();
									}
									mysqli_select_db($link,"test");
									$results=mysqli_query($link,"select * from usertable where Username='$username' and Password='$password'") or die("failed to connect".mysqli_connect_error());
									$row=mysqli_fetch_array($results);
									if ($row['Username'] == $username && $row['Password'] == $password) {
										header("location: http://localhost/college/home.php");
										$_SESSION['username'] = $username;
										$_SESSION['mes'] = "true";
									} 
									else {
										echo "Login failed";
									}
									mysqli_close($link);
								}
							}
						?>
					</div>
					<form action="index.php" method="POST">
						<input class="input" type="text" name="Username" placeholder="Username" required><br>
						<input class="input" type="password" name="Password" placeholder="Password" required><br>
						<input class="button" type="submit" name="login" value="LOGIN"><br>
						<a class="button" id="oksignup"  href="#">Sign Up here</a> | <a class="button" id="forgotpass" href="#" onclick="forgpw()">Forgot Password?</a>
					</form>
				</div>
			</div>
			<div class="form reg" id="signup">
				<div class="box">
					<h3>SIGN UP</h3>
					<div class="social-container">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<?php
						if(isset($_POST['signup']))
						{
							$usernameSub=$password1=$password2="";
							if($_SERVER["REQUEST_METHOD"] == "POST")
							{
								$usernameSub = test_input($_POST['Username']);
								$password1 = test_input($_POST['Password']);
								$password2 = test_input($_POST['ConfirmPassword']);

								$link = mysqli_connect("localhost", "root", "");
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}
								if(empty($usernameSub))
									array_push($error, "Please fill username");
								if(empty($password1))
									array_push($error, "Please fill password");
								if(empty($password2))
									array_push($error, "Please fill confirm password");
								if($password1 != $password2)
									echo "Password's don't match";
								else if($password1 == $password2)
								{
									mysqli_select_db($link,"test");
									$results=mysqli_query($link,"insert into usertable(Id,Username,Password) values(8,'$usernameSub','$password1');") or die("failed to connect".mysqli_connect_error());
									header('localhost: http://localhost/college/');
									echo "Data Stored" ;
								}
								mysqli_close($link);
							}
						}
					?>
					<form action="index.php" method="POST">
						<input class="input" type="text" id="email" name="Username" placeholder="Username" required><br>
						<input class="input" type="password" name="Password" placeholder="Password" required><br>
						<input class="input" type="password" name="ConfirmPassword" placeholder="Confirm Password" required><br>
						<input class="button" type="submit" name="signup" value="SIGN UP" onclick="validate()"><br>
						<a id="oklogin" class="button" href="#">Login Here</a>
					</form>
				</div>
			</div>

			<div class="form reg" id="forgotpw" style="display: none;">
				<div class="box">
					<h3>FORGOT PASSWORD</h3>
					<?php
						if(isset($_POST['forgot']))
						{
							$usernameSub1=$password1a=$password2a="";
							if($_SERVER["REQUEST_METHOD"] == "POST")
							{
								$usernameSub1 = test_input($_POST['Username1']);
								$password1a = test_input($_POST['Password1']);
								$password2a = test_input($_POST['ConfirmPassword1']);
								$link = mysqli_connect("localhost", "root", "");
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}
								if(empty($usernameSub1))
									array_push($error, "Please fill username");
								if(empty($password1a))
									array_push($error, "Please fill password");
								if(empty($password2a))
									array_push($error, "Please fill confirm password");
								if($password1a != $password2a)
									echo "Password's don't match";
								else if($password1a == $password2a)
								{
									mysqli_select_db($link,"test");
									$results=mysqli_query($link,"UPDATE usertable SET Password = '$password1a' WHERE Username = '$usernameSub1'") or die("failed to connect".mysqli_connect_error());
									header('localhost: http://localhost/college/');
									echo "Data Stored" ;
								}
								mysqli_close($link);
							}
						}
					?>
					<form action="#" method="POST">
						<input class="input" type="text" name="Username1" placeholder="Username" required><br>
						<input class="input" type="password" name="Password1" placeholder="New Password" required><br>
						<input class="input" type="password" name="ConfirmPassword1" placeholder="Confirm Password" required><br>
						<input class="button" type="submit" name="forgot" value="FORGOT PASSWORD"><br>
						<a id="oklogin" class="button" href="#">Login Here</a>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
		<script type="text/javascript" src="Login.js"></script>
		<script type="text/javascript" src="validation.js"></script>
	</body>
</html>