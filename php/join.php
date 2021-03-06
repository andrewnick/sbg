<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php' ?>
<body class="bg">
	<?php include 'header.php' ?>
	<section class="section-spacing">
		<div class="container">
			<div class="row join-spacer">
				<div class="col-sm-12">
					<h2>Join the Guild</h2>
					<p class="text-max-width">If you want to join The Guild simply fill out this form with your details and you will receive an email about the next step to join.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7">

				<h3> Requirements </h3>
				<ol class="join-list">
					<li>Your name must be Sarah Bichan.</li>
					<li>
						<p>Acceptance to the Guild is at the discretion of the Membership Panel. Their commitment to upholding the high standards of the Sarah Bichan Guild is unprecedented. It is not uncommon for applicants to be rejected several times before they meet the entry criteria.</p>
						<p>Rejected applicants include:</p>
						<ul>
							<li>Sarah Jessica Parker</li>
							<li>Sarah Michelle Gellar</li>
							<li>Sarah Palin</li>
							<li>Sarah Ferguson</li>
							<li>Cam Bichan</li>
						</ul>
					</li>
				</ol>


				<form id="join-form" action="#" class="join-form join-form-show">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <button type="button" id="ss-submit" class="btn btn-default btn-lite-gold ">Join</button>
				</form>
				<div class="join-message">
					<h3>Thank you</h3>
					<p>Thank you for your interest in joining the Sarah Bichan Guild. We will consider your application but don't hold your breath. Good luck. You are going to need it.</p>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="join-sidebox">
					<h3>Your name isn't Sarah Bichan?</h3>
					<a href="http://www.dia.govt.nz/Services-Births-Deaths-and-Marriages-Changing-a-Name?OpenDocument#three" class="btn btn-default btn-lite-gold" target="_blank">Change your name</a>
				</div>
				
				<div class="join-sidebox">
					<h3>First Name Sarah But Last Name Not Bichan?</h3>
					<p> Apply to marry Cam Bichan </p>
					<a href="https://www.facebook.com/cbichan" class="btn btn-default btn-lite-gold" target="_blank"	>View Cam's profile</a>
				</div>
			</div>
		</div>
	</section>	

	<?php include 'footer.php' ?>
</body>
</html>