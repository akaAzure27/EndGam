<?php
include_once("config.php");
include('header.php');

$result = mysqli_query($conn, "SELECT * FROM cart");

if(isset($_POST['submit'])) {
    
    while ($row = mysqli_fetch_array($result)) {
        $game_id = $row['game_id'];
        $game_name = $row['game_name'];
        $game_image = $row['game_image'];
        $result2 = mysqli_query($conn, "SELECT sum(price) as total_price FROM cart");
        $row2 = mysqli_fetch_array($result2);
        $total_price = $row2['total_price'];
    
        $result3 = mysqli_query($conn, "INSERT INTO mygame(game_id, game_name, game_image)
        VALUES('$game_id', '$game_name', '$game_image')");
    
    }

    if($result3) {
        $delete = mysqli_query($conn, "DELETE FROM cart");
        header('Location: mygames.php');
        exit;
    }

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
.container_cart {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
}
form {
  max-width: 500px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 20px;
}

h2 {
  font-size: 24px;
  margin-top: 30px;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  font-size: 16px;
  box-sizing: border-box;
}

select {
  height: 40px;
}

input[type="submit"] {
  background-color: #008CBA;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
}

input[type="submit"]:hover {
  background-color: #00688B;
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
			<h2>Payment</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>  /
				<a href="games.php">Game</a>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
    <div class="container_cart">
    <h1>Payment Details</h1>
<form action="pay.php" method="post">
  <h2>Card Details</h2>
  <label for="card">Card Type:</label>
  <select id="card" name="card">
  <option value="bca">BCA</option>
    <option value="visa">Visa</option>
    <option value="mastercard">Mastercard</option>
    <option value="amex">American Express</option>
  </select>

  <label for="card_number">Card Number:</label>
  <input type="text" id="card_number" name="card_number" required>

  <label for="security_code">Security Code:</label>
  <input type="text" id="security_code" name="security_code" required>

  <h2>Billing Information</h2>
  <label for="first_name">First Name:</label>
  <input type="text" id="first_name" name="first_name" required>

  <label for="last_name">Last Name:</label>
  <input type="text" id="last_name" name="last_name" required>

  <label for="city">City:</label>
  <input type="text" id="city" name="city" required>

  <label for="country">Country:</label>
  <select id="country" name="country" required>
  <option value="id">Indonesia</option>
    <option value="US">United States</option>
    <option value="CA">Canada</option>
    <option value="GB">United Kingdom</option>
    <option value="AU">Australia</option>
    <!-- add more options here as needed -->
  </select>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required>

  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required>

  <input type="submit" name="submit" value="Pay">
</form>
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
