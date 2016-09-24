<?php 
/**
 * Page Variables
 */

$pageTitle = 'Contact';
$pageID = str_replace( ' ', '-', strtolower( $pagetitle ) ); // convert page title to lowercase and replace spaces with dashes

?>

<?php include('include/header.php') ?>

<section>

	<div class="wrapper clearfix">

		<div class="contact-info-container clearfix">
	
			<h1>contact us</h1>

			<div class="contact-blurb">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id pretium ipsum. Maecenas tincidunt consectetur lacus, non placerat turpis congue sed. Maecenas iaculis venenatis auctor. Proin neque lectus, lobortis vitae nisl quis, adipiscing pharetra metus. Sed convallis accumsan diam, at tincidunt ligula.</p>
			</div>

			<div class="contact-details">
				<ul>
					<li><i class="fa fa-map-marker primary-text"></i> 2819 Kingsway Ave<br>Vancouver BC V3P 3P2</li>
					<li><i class="fa fa-phone"></i> 1 604 239 5896</li>
					<li><i class="fa fa-envelope"></i> <a href="mailto:info@paperlion.com">info@paperlion.com</a></li>
				</ul>
			</div>

		</div>

		<div class="contact-map">
			<div style="height:400px;width:1280px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Vancouver,+BC,+Canada&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="https://www.interserver-coupons.com" id="enable-map-data">InterserverCoupons</a><style>#gmap_canvas img{max-width:none!important;background:none!important;}</style></div>

			<script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=7ee55f32-a822-a36d-e3af-208c77063872&c=google-map-enabler&u=1474754663" defer="defer" async="async"></script>

		</div>

	</div><!--/.wrapper-->

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