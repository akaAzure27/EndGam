<?php
include_once("config.php");
include('header.php');

$result = mysqli_query($conn, "SELECT * FROM mygame");

if(isset($_POST['download'])) {
    header('Location: ');
    
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
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
}
h1 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 30px;
    color: #ffffff;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

th,
td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ffffff;
    color: #ffffff;
}

th {
    background: linear-gradient(to bottom, #8d6aff, #b01ba5, #8d6aff);
    color: #ffffff;
}

.product {
    display: flex;
    align-items: center;
    color: #ffffff;
}

.product img {
    width: 60px;
    height: 60px;
    margin-right: 20px;
}

.product-details h2 {
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 5px 0;
    color: #ffffff;
}

.product-details p {
    font-size: 14px;
    margin: 0;
    color: #ffffff;
}

.quantity {
    display: flex;
    align-items: center;
    color: #ffffff;
}

.quantity input {
    width: 40px;
    padding: 5px;
    margin: 0 10px;
    border: 1px solid #ffffff;
    background-color: transparent;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
}

.total_cart {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 30px;
    color: #ffffff;
}

.download {
    padding: 10px 20px;
    border: none;
    background: #8d6aff;
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.download:hover {
    background-color: #6a4fcc;
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
			<h2>My Game</h2>
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
		<h1>My Game</h1>
		<table>
  <thead>
    <tr>
      <th>Game Image</th>
      <th>Game Name</th>
      <th>Buy Time</th>
      <th>Download</th>
    </tr>
  </thead>
  <?Php
  if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$game_id = $row['game_id'];
					$game_name = $row['game_name'];
					$game_image = $row['game_image'];
                    $game_time = $row['buy_time']
			?>
  <tbody>
    <tr>
      <td><img src="<?php echo $game_image; ?>" alt="<?php echo $game_name; ?>"></td>
      <td><?php echo $game_name; ?></td>
      <td><?php echo $game_time; ?></td>
      <form action="download.php" method="post">
      <input type="hidden" name="game_image" value="<?php echo $game_image; ?>">
      <td><button class="download" id="download" name="download">Download</button></td>
      </form>
    </tr>
    <!-- add more rows for additional games as needed -->
  </tbody>
  <?php
				}
			} else {
				echo "";
			}
			?>
</table>
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
