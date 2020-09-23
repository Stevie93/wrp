<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
if(login_check($mysqli) == true) {
        // Add your protected page content here!
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebReceiptPro | Dashboard</title>
	<link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</head>
<body>
	<!-- header section -->
	<section class="hero is-light is-bold is-medium">
		<div class="hero-head">
			<div class="container">
				<nav class="level" style="padding:10px; margin:20px; margin-top:5px;">
					<!-- Left side -->
					<div class="level-left">
						<div class="level-item">
							<a href="./index.php"><img src="./img/WebForge.png" width="250px" height="50px" alt=""></a>
						</div>
					</div>

					<!-- Right side -->
					    <?php  if (isset($_SESSION['username'])) : ?>
					<div class="level-right">
						<p class="level-item heading">Welcome&nbsp;&nbsp;<strong><?php echo $_SESSION['username']; ?></strong></p>
						<p class="level-item"><a href="includes/logout.php" class="button is-primary is-small">Log Out</a></p>
						<p class="level-item"><a href="passwordreset.php" class="button is-danger is-small">Reset Password</a>
						<p class="level-item"><a href="addnumbers.php" class="button is-info is-small">Add Numbers</a>
						    <?php endif ?>
					</div>
				</nav>
			</div>
		</div>
 <div class="content">

</div>
		<!-- buttons area -->
		<div class="hero-body" style="padding-top:80px;">
			<div class="container has-text-centered">
				<div class="columns">
					<div class="column is-2">
					</div>
					<div class="column">
						<a class="button is-rounded is-large is-success is-focused" href="receipt.php">
							<span class="icon">
								<i class="fa fa-plus"></i>
							</span>
							<span class="">Create New Receipt</span>
						</a>
					</div>
					<div class="column is-1">
					</div>
					<div class="column">
						<a class="button is-rounded is-dark is-large is-outlined" href="datasheet.php">
							<span class="icon">
								<i class="fa fa-list"></i>
							</span>
							<span>&nbsp;&nbsp;&nbsp;View Data Sheet&nbsp;&nbsp;&nbsp;</span>
						</a>
					</div>
					<div class="column is-2">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- contact us section -->
	<section id="contact" class="hero is-info is-bold">
		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				<h1 class="title">
					CONTACT US
				</h1>
				<div class="columns">
					<div class="column is-half">
						<h2 class="subtitle">
							<span class="icon has-text-danger" style="margin-left: auto; margin-right: auto;">
								<i class="fas fa-map-marker"></i>
							</span><br><br>
							<p>No. 1 South Loop</p>
							<p>Sunbird Stree</p>
							<p>Tesano</p>
							<p>Accra-Ghana</p>
						</h2>
					</div>
					<div class="column is-half">
						<h2 class="subtitle">
							<span class="icon has-text-warning" style="margin-left: auto; margin-right: auto;">
								<i class="fas fa-address-card"></i>
							</span><br><br>
							<p><i class="fa fa-globe"></i><a href="https://webforgegh.com"> www.webforgegh.com </a></p>
							<p><i class="fa fa-envelope has-text-dark"></i><a href="mailto:info@webforgegh.com"> info@webforgegh.com</a></p>
							<p><i class="fa fa-phone has-text-primary"></i><a href="tel:+233303328141"> 020-332-8141</a></p>
						</h2>
					</div>
				</div>
			</div>
		</div>

		<!-- Hero footer: will stick at the bottom -->
		<div class="hero-foot">
			<nav class="tabs is-boxed is-fullwidth">
				<div class="container">
					<ul>
						<li class="is-active"><a href="./index.php#top">Back To Homepage</a></li>
						<li><a href="./index.php#how">How It works</a></li>
						<li><a href="includes/logout.php">Log Out</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</section>

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="content has-text-centered">
				<p>
					<strong>WebReceiptPro</strong> is powered by <a href="https://webforgegh.com">Webforge Technologies</a>
				</p>
			</div>
		</div>
	</footer>
</body>
</html>
<?php

} else { 
        header('location: index.php#log');
}
?>
