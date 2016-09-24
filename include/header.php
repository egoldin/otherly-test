<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#e95913">
	
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="styles/main.css">

	<!-- jQuery -->
	<script src="scripts/jquery-3.1.1.min.js"></script>
	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/96c336cbfb.js"></script>
	<!-- Main JS -->
	<script src="scripts/main-min.js"></script>
	
	<?php 
		// Use in case of external file specific to a page
		if ($pageTitle == 'Home') { ?>
			<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
			<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
		<?php
		}
	?>

</head>

<body id="<?php echo $pageID; ?>">

	<header class="primary">
		<div class="header-overlay clearfix">
			<div class="social-links-container">
				<ul class="social-links-list">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>

			<div class="header-container clearfix">
				<div class="logo-container">
					<a href="index.php"><img class="logo" src="img/paperlion-logo.png"></a>
				</div>

				<nav class="main-nav">
					<ul class="main-nav-list">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div><!--/.header-overlay-->
	</header>