<?php
include_once("config.php");
include('header.php');

$user_id = $_SESSION['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$user_id'");
$row = mysqli_fetch_array($result);
$image_path = $row['image_path'];
$birthdate = $row['birthdate'];
$email = $row['email'];

$result2 = mysqli_query($conn, "SELECT description FROM users WHERE user_id = '$user_id'");
$row2 = mysqli_fetch_array($result2);
$desc = $row2['description'];

if(isset($_POST['edt_button'])) {
    header('Location: edit.php?');
}



?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <style>
.container_profile {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
}
.container_1 {
	display: flex;
	flex-direction: column;
	align-items: center;
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
}


input[type="file"] {
	display: none;
}

.edit-image-btn {
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
	margin-bottom: 20px;
}

.form_button {
    padding: 10px 20px;
	border-radius: 5px;
    margin-bottom: 20px;
}

.edit-image-btn:hover {
	background-color: #0069d9;
}

.profile-field {
	display: flex;
	align-items: center;
	margin-bottom: 10px;
}

.label {
	flex-basis: 100px;
	font-weight: bold;
}

.value {
    flex-grow: 1;
}

.description {
	font-style: italic;
}
    </style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<!-- using the include('header.php') -->
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>My Profile</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>  /
				<a href="games.php">Game</a>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
    <div class="container_profile">
    <form action="profile.php" class="form_button" method="post">
    <img src="<?php echo $image_path; ?>" alt="" style="width: 150px; height: 150px;"->
    <form action="profile.php" class="form_button" method="post">
		<button class="edit-image-btn" name="edt_button">Edit Profile</button>
    </form>
		<div class="profile-field">
			<span class="label">Name:</span>
			<span class="value"><?php echo $_SESSION['username'] ?></span>
		</div>
		<div class="profile-field">
			<span class="label">Birthday:</span>
			<span class="value"><?php echo $birthdate ?></span>
		</div>
		<div class="profile-field">
			<span class="label">Email:</span>
			<span class="value"><?php echo $email ?></span>
		</div>
		<div class="profile-field">
			<span class="label">Description:</span>
			<span class="value description"><?php echo $desc ?></span>
		</div>
	</div>
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	
	<!-- Featured section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/footer-right-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="./img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="games.php">Games</a></li>
				<li><a href="review.php">Reviews</a></li>
				<li><a href="blog.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
