<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Home.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>College Predictor</title>
	</head>
	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
			<a class="navbar-brand" href="home.php">
				<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Sikhsha
			</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="practice.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="colleges.php">Colleges</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Not <?php
					if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
					?>? Logout</a>
				</li>
			</ul>
		</nav>
		<div class="background">
			<i class="fa fa-quote-left"></i><p>Research shows that there is only half as much variation in student achievement between schools as there is among classrooms in the same school. If you want your child to get the best education possible, it is actually more important to get him assigned to a great teacher than to a great school.</p>
		</div>
		<div class="background">
			<h2>College Predictor</h2><br>
			<form method="post" action="home.php">
				<div id="center">
					<input class="ip" type="text" name="board" placeholder="Board's Percentage" required><br><br>
					<input class="ip" type="text" name="jee" placeholder="JEE Score" required><br><br>
					<input class="ip" type="text" name="bits" placeholder="BITS Score"><br><br>
					<input class="ip" type="text" name="srm" placeholder="SRMJEEE Score"><br><br>
					<input class="ip" type="text" name="vit" placeholder="VITEEE Score"><br><br>
					<input class="button" type="submit" name="submit" value="SUBMIT">
				</div>
			</form>
		</div>
	</body>
</html>
