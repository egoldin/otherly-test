<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#000000">
	
	<link rel="stylesheet" href="styles/main.css">

	<script src="scripts/main-min.js"></script>
	<?php 
		// Use in case of external file specific to a page
		/*if ($pageTitle == 'Page Title Here') {
			echo '<script src="scripts/example.js"></script>';
		}*/
	?>

</head>

<body id="<?php echo $pageID; ?>">

	<header>
		
	</header>