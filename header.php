<?php 
$logo = "images/logo-white.png";
$logo_dark = "images/logo.png";
$site_name = "Info G Innovative Solutions";
$extension = ".php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<title><?=$site_name?></title>
		<link rel="icon" type="image/x-icon" href="images/igs3.png">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="preloader">
			<div class="loader-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<header class="home-3 header">
			<div class="header-top" hidden>
				<div class="container">
					<div class="header-top-wrapper">
						<div class="header-top-left">
							<div class="header-top-contact">
								<ul>
									<li>
										<div class="header-top-contact-info">
											<a href="#"><i class="far fa-map-marker-alt"></i> 293/4, MG Rd, New Fairlands, 
											Salem, Tamil Nadu 636016</a>
										</div>
									</li>
									<li></li>
									<li>
									</li>
								</ul>
							</div>
						</div>
						<div class="header-top-right">
							<div class="header-top-social">
								<span>Follow Us:</span>
								<a href="https://www.facebook.com/info.gsolution/"target="_blank"><i class="fab fa-facebook-f"></i></a> 
								<a href="https://in.linkedin.com/company/info-g-solution?original_referer=https%3A%2F%2Fwww.google.com%2F"target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/infogsolution?t=FwOgp-unm5JtrBdYOkx5XA&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com/infogsolution?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-navigation" style='background: black;'>
				<nav class="navbar navbar-expand-lg" >
					<div class="container">
						<a class="navbar-brand" href="index<?=$extension?>">
						    <!--border-radius: 20px 200px 20px 200px;
							background: white;-->
						<img src="<?=$logo?>" alt="logo" style="
							
							">
						</a>
						<div class="mobile-menu-right">
							<div class="mobile-menu-list">
								<a href="#" class="mobile-menu-link search-box-outer"><i class="far fa-search"></i></a>
							</div>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="main_nav">
							<ul class="navbar-nav" style="margin-right: 130px;">
								<li class="nav-item dropdown">
									<a class="nav-link" href="index<?=$extension?>" >Home</a>
								</li>
								</li>
								<li class="nav-item"><a class="nav-link" href="about<?=$extension?>" >About</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="service<?=$extension?>" data-bs-toggle="dropdown" >Service</a>
									
									<ul class="dropdown-menu fade-down" style="width: 280px;">
									    <li class="dropdown-submenu ">
											<a class="dropdown-item" href="service<?=$extension?>" >Service Overview</a>
										</li>
										<li class="dropdown-submenu" >
											<a class="dropdown-item dropdown-toggle"  href="#">AI Data Solution</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="imageannotation<?=$extension?>">Image Annotation</a></li>
												<li><a class="dropdown-item" href="videoannotation<?=$extension?>">Video Annotation</a></li>
												<li><a class="dropdown-item" href="lidarannotation<?=$extension?>">Lidar Annotation</a></li>
												<li><a class="dropdown-item" href="textannotation<?=$extension?>">Text Annotation</a></li>
												<li><a class="dropdown-item" href="audioannotation<?=$extension?>">Audio Annotation</a></li>
											</ul>
										</li>
										
										<li class="dropdown-submenu ">
											<a class="dropdown-item" href="customer<?=$extension?>" >Customer Engagement Service</a>
										</li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" href="data<?=$extension?>" >Data Conversion</a>
										</li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" href="epublication<?=$extension?>">E-Publication</a>
										</li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" href="software<?=$extension?>">Software Development</a>
										</li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" href="mobileapplication<?=$extension?>" >Mobile Application Development</a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown">
								<li class="nav-item"><a class="nav-link" href="career<?=$extension?>">Careers</a></li>
								<li class="nav-item"><a class="nav-link" href="contact<?=$extension?>">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="https://hrm.infogsolution.com/"><i class="fa fa-user"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>