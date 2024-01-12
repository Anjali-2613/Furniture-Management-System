<?php 
session_start();
include "./admin/config/dbcon.php";
$url = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="author">
<!-- <link rel="shortcut icon" href="favicon.png"> -->

<meta name="description" content="" />
<meta name="keywords" content="bootstrap, bootstrap4" />

<!-- Bootstrap CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="css/tinySlider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<title>header</title>
</head>

<body>
<div class="col-lg-4" style="display:-webkit-box; align-items:center;">
<?php include('./login/message.php'); ?>
</div>
<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark sticky-top" arial-label="Furni navigation bar">
	<div class="container">
		<a class="navbar-brand" href="./index.php" style="font-size:25px; font-family:sans-serif;">Dolly Steel Furniture</a>
		<button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				<li class="<?php if($url == 'index.php') { echo 'active'; }?>">
					<a style="font-family: sans-serif;" class="nav-link" href="./index.php">Home</a>
				</li>
				<li class="<?php if($url == 'shop.php') { echo 'active'; }?>"><a style="font-family: sans-serif;" class="nav-link" href="./shop.php">Shop</a></li>
				<!-- <li><a class="nav-link" href="about.html">About us</a></li>
				<li><a class="nav-link" href="services.html">Services</a></li>
				<li><a class="nav-link" href="blog.html">Blog</a></li> -->
				<li class="<?php if($url == 'contact.php') { echo 'active'; }?>"><a style="font-family: sans-serif;" class="nav-link" href="./contact.php">Contact us</a></li>
				
			</ul>
				
			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">

						<?php if(isset($_SESSION['auth_user'])) :?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<?= $_SESSION['auth_user']['user_name']; ?>
							</a>
							<ul class="dropdown-menu">
								
								<li> 
									<form action="./login/allcode.php" method="POST">
										<button name="logout" type="submit" class="dropdown-item" style="font-family: sans-serif;">Logout</button>
									</form>
								</li>
							</ul>
						</li>

						<?php else : ?>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="images/user.svg">
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="./accountLogin.php" style="font-family: sans-serif;">Login</a></li>
								<li><a class="dropdown-item" href="./accountRegister.php" style="font-family: sans-serif;">Register</a></li>
							</ul>
							</li>
						<?php endif; ?>	 
					</ul>
				</div>
			</ul>
		</div>
	</div>
		
</nav>
		<!-- End Header/Navigation -->
