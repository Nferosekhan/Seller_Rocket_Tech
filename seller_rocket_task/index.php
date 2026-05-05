<?php
$message = "";
if (isset($_GET['success'])) {
    $message = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    ".$_GET['success']."
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                </div>";
}
elseif (isset($_GET['error'])) {
    $message = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    ".$_GET['error']."
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                </div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller Rocket</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm fixed-top" style="background-color: #1E2248 !important;color: #F5C518 !important;">
			<a class="navbar-brand" style="color: #F5C518;">Seller Rocket</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background-color: #F5C518;">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item" style="color: #F5C518 !important;padding: 18px;"><a href="#hero">Home</a></li>
					<li class="nav-item" style="color: #F5C518 !important;padding: 18px;"><a href="#services">Services</a></li>
					<li class="nav-item" style="color: #F5C518 !important;padding: 18px;"><a href="admin.php">Admin Login</a></li>
					<li class="nav-item" style="color: #F5C518 !important;padding: 18px;"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main style="margin: 90px 30px;padding: 18px;">
		<?= $message; ?>
		<div style="text-align: center;margin: 18px;" id="hero">
			<h1 style="margin-top: 18px;color: #F5C518;">Seller Rocket Technologies</h1>
			<h5 style="margin-top: 18px;color: #1E2248;">Branding Small Business Online</h5>
			<p style="margin-top: 18px;">Seller Rocket is a marketplace growth agency headquartered in Thanjavur, Tamil Nadu, India. We manage 170+ brand accounts across Amazon India, Flipkart, Myntra, Meesho, Ajio, Blinkit, Zepto, Swiggy Instamart, and Etsy. Our services include account management, catalog optimization, sponsored ads (PPC), listing creation, brand store design, and full-stack e-commerce growth strategy.</p>
		</div>

		<h1 align="center" style="margin-top: 18px !important;color: #F5C518;" id="services">Services</h1>
		<div class="row" style="text-align: center;margin-top: 18px !important;">
			<div class="card col-lg-4 col-md-6">
				<div class="card-header">
					Service
				</div>
				<div class="card-body">
					Amazon Management
				</div>
				<div class="card-footer">
					See More...
				</div>
			</div>
			<div class="card col-lg-4 col-md-6">
				<div class="card-header">
					Service
				</div>
				<div class="card-body">
					Amazon Management
				</div>
				<div class="card-footer">
					See More...
				</div>
			</div>
			<div class="card col-lg-4 col-md-6">
				<div class="card-header">
					Service
				</div>
				<div class="card-body">
					Amazon Management
				</div>
				<div class="card-footer">
					See More...
				</div>
			</div>
		</div>

		<h1 align="center" style="margin-top: 18px !important;color: #F5C518;" id="contact">Contact</h1>
		<form class="was-validated" action="contact.php" method="post" style="margin-bottom: 18px;">
			<div class="form-group">
			    <label for="name">Name:</label>
			    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			    <label for="phone">Phone:</label>
			    <input type="tel" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required pattern="[0-9]{10}" maxlength="10">
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			    <label for="platform">Platform:</label>
			    <select class="form-control" id="platform" name="platform" required>
			    	<option value="" readonly>Select the Platform</option>
			    	<option value="Amazon">Amazon</option>
			    	<option value="Flipkart">Flipkart</option>
			    	<option value="Shopify">Shopify</option>
			    	<option value="Wordpress">Wordpress</option>
			    </select>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			    <label for="message">Message:</label>
			    <textarea class="form-control" rows="5" id="message" placeholder="Enter Message" required name="message"></textarea>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<input type="submit" class="btn btn-primary" value="submit" name="submit">
		</form>
	</main>
	<footer>
		<nav class="navbar fixed-bottom" style="background-color: #1E2248 !important;color: #F5C518 !important;">
			<h1>Seller Rocket</h1>
			<p>927, 2nd Floor, Parameshwari Complex, E Main St, next to Bank Of Baroda, above Manapuram Gold Finance Pvt Ltd, Someshwaram, Thanjavur, Tamil Nadu 613009</p>
			<h5 style="margin-top: 10px;">+91-9944331949</h5>
			<h5 style="margin-top: 10px;">ceo@sellerrocket.in</h5>
		</nav>
	</footer>
</body>
</html>