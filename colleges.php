<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="colleges.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>College Sikhsha</title>
	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Not <?php
					if(isset($_SESSION['username']))
					{
						echo $_SESSION['username'];
					}
					?>? Logout</a>
				</li>
			</ul>
		</nav>

		<div class="background">
			<i class="fa fa-quote-left"></i><p>Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.</p>
		</div>
		<div class="background">
			<h3>Colleges</h3>
			<article><h2>SRM Institute of Science and Technology</h2>It is a deemed university located in Kattankulathur, Chengalpattu, Tamil Nadu, India, near Chennai. It was founded in 1985 as SRM Engineering College in Kattankulathur, under University of Madras. SRM Institute of Science and Technology includes six campuses, three in Tamil Nadu — Kattankulathur, Ramapuram and Vadapalani, one in NCR Delhi, one in Sikkim and one in Amaravati. And there are about 50,000 students studying in SRM College.

			The institute gained deemed status during the 2003–2004 academic year and was renamed SRM Institute of Science and Technology. It became SRM University in 2006 following permission by the UGC for 'Deemed to be Universities' to be called 'Universities'.[2] In 2017 it was renamed back as SRM Institute of Science and Technology following the UGC request to drop "University" from the name.</article>
			<div style="text-align:left;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ij0KI_9TKXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<article><h2>Vellore Institute of Technology (VIT) </h2> It is a private university located in Vellore, Tamil Nadu, India. Founded in 1984, as Vellore Engineering College, by G. Viswanathan, the institution offers 20 undergraduate, 34 postgraduate, four integrated and four research programs. It has campuses in Vellore, Amravati, Bhopal and Chennai.</article>
			<div style="text-align:left;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/JA3t27eBL3M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<article><h2>National Institute of Technology, Tiruchirappalli</h2>It was formerly called as Regional Engineering College, Tiruchirappalli, is a public technical and research university near the city of Tiruchirappalli in Tamil Nadu, India. Founded in 1964, it is one of India's oldest, most selective, and most prestigious technical universities. It is located in a campus of 800 acres (3.24 km²).</article>
			<div style="text-align:left;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/VbMHtpOcYB4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>