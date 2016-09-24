<?php 
/**
 * Page Variables
 */

$pageTitle = 'Home';
$pageID = str_replace( ' ', '-', strtolower( $pageTitle ) ); // convert page title to lowercase and replace spaces with dashes

?>

<?php include('include/header.php') ?>

<section class="about">
	<div class="column-wrapper wrapper">

		<div class="banner-text one-third column">
			<h1 class="section-title">About</h1>

			<p>Quisque egestas sed quam et tempus. Nulla et ornare ligula, vitae volutpat mi. Fusce lacinia ac lacus et imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam suscipit dapibus ornare. Duis venenatis ultrices ullamcorper tincidunt. Phasellus eget congue lacus.</p>
			<p>Integer non magna in lectus suscipit sollicitudin. Maecenas non hendrerit eros. Fusce sagittis, neque at suscipit mollis, diam nulla semper lorem, id lacinia mauris tellus ac enim. </p>
		</div>

		<div class="banner-img two-thirds column">
			<img src="img/hand-phone.jpg" alt="About Us">
		</div>

	</div>
</section>

<section class="projects center-text">

	<h1 class="section-title">Our Projects</h1>

	<div class="column-wrapper wrapper">

		<div class="column one-quarter">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<h2>project 1</h2>
			<p> Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehicula ut nunc.</p>
			<a href="#" class="btn">view project</a>
		</div>
		
		<div class="column one-quarter">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<h2>project 2</h2>
			<p> Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehicula ut nunc.</p>
			<a href="#" class="btn">view project</a>
		</div>

		<div class="column one-quarter">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<h2>project 3</h2>
			<p> Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehicula ut nunc.</p>
			<a href="#" class="btn">view project</a>
		</div>

		<div class="column one-quarter">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<h2>project 4</h2>
			<p> Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehicula ut nunc.</p>
			<a href="#" class="btn">view project</a>
		</div>

	</div>

</section>

<section class="investors">

	<div class="wrapper">

		<h3 class="section-title">Our Happy Investors</h3>

		<div class="slider investors-slider">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
			<img src="img/nic-cage.jpg" alt="Placeholder">
		</div>

	</div>
</section>


<section class="form">
	<div class="wrapper">
		<h2 class="section-title center-text">Get in touch!</h2>
		
		<form id="contact_form" action="GET">

			<input type="text" id="first-name" name="first-name" placeholder="First Name" required>
			<input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
			<input type="email" id="email" name="email" placeholder="Email" required>
			<textarea name="message" id="message" placeholder="Message" required></textarea>

			<input type="submit" id="submit" class="btn" value="Submit">

		</form>

	</div>
</section>

<?php include('include/footer.php') ?>