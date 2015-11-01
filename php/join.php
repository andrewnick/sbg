<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body class="bg">
<!-- 	<script type="text/javascript" src="bundle.js" charset="utf-8"></script> -->
	<script src="http://localhost:8080/assets/css.bundle.js"></script>
	<script src="http://localhost:8080/assets/js.bundle.js"></script>

	<?php include '../header.php' ?>
	<section class="section-spacing">
		<div class="container">
			<div class="row join-spacer">
				<div class="col-sm-6">
					<h2>Join the Guild</h2>
					<p class="text-max-width">If you want to join the guild simply fill out this form with your details and you will recieve an email about the next step to join.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">

					<h3> Requirements </h3>
					<ol class="join-list">
						<li>Your name must be Sarah Bichan</li>
					</ol>
					<form method="POST" action="" class="join-form">
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="name">Address</label>
					    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
					  </div>
					  <button type="submit" class="btn btn-default btn-lite-gold">Join</button>
					</form>


				</div>
				<div class="col-sm-6">
					<div class="join-sidebox">
						<h3>Your name isn't Sarah Bichan?</h3>
						<a href="http://www.dia.govt.nz/Services-Births-Deaths-and-Marriages-Changing-a-Name?OpenDocument#three" class="btn btn-default btn-lite-gold">Change your name</a>
					</div>
					
					<div class="join-sidebox">
						<h3>First Name Sarah But Last Name Not Bichan?</h3>
						<p> Apply to marry Cam Bichan </p>
						<a href="https://www.facebook.com/cbichan" class="btn btn-default btn-lite-gold">View Cams profile</a>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<?php include '../footer.php' ?>
</body>
</html>