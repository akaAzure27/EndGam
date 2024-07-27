<?php
include_once("config.php");
include('header.php');

$result = mysqli_query($conn, "SELECT game_price FROM price WHERE game_id = 27");
$row = mysqli_fetch_array($result);
$price = $row['game_price'];

$result2 = mysqli_query($conn, ("SELECT * FROM games where game_id = 27"));
$row2 = mysqli_fetch_array($result2);
$game_id = $row2['game_id'];
$game_name = $row2['game_name'];
$image_path = $row2['image_path'];
$release = $row2['release_date'];
$update = $row2['created_at'];

$result3 = mysqli_query($conn, "SELECT games.game_id, games.game_name, GROUP_CONCAT(categories.category_name) AS category_name
						FROM games
						INNER JOIN game_categories ON games.game_id = game_categories.game_id
						INNER JOIN categories ON game_categories.category_id = categories.category_id
						WHERE games.game_id = 27
						GROUP BY games.game_id");
$row3 = mysqli_fetch_array($result3);
$genre = $row3['category_name'];

if(isset($_POST['btn_game'])) {
	$result3 = mysqli_query($conn, "INSERT INTO cart(game_id, game_name, game_image, price)
	VALUES('$game_id', '$game_name', '$image_path', '$price')");
	
	if($result3) {
		header('Location: shopping_cart.php');
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
        .btn_game {
    padding: 10px 20px;
    border: none;
    background: linear-gradient(to bottom, #8d6aff, #b01ba5);
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}
    </style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2><?php echo $game_name; ?></h2>
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>  /
				<a href="games.php">Games</a>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
			<img src="<?php echo $image_path; ?>" alt="<?php echo $game_name; ?>" width="1149" height="487">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<h2 class="gs-title"><?php echo $game_name; ?></h2>

					<form action="" method="post">
                    <button class="btn_game" name="btn_game">Add To Cart / <?php echo $price; ?></button><br><br><br>
					</form>

					<h4>About This Game</h4>
					<p>TEAR UP THE STREETS, CONTROL THE CHASE.<br>
Tearing up the streets with friends brings more challenges, as Need for Speed™ Unbound Vol 2 introduces new ways to compare and compete with the squad in Lakeshore Online, and even more opportunities to risk it all for rewards. Hit up your homies for an exhilarating cop chase through the streets or battle it out on a packed grid, making the most of every twist and turn to outsmart your friends and let them know who runs these streets! Further your legacy by racing against the clock in Hot Laps events that bring an intense blast of speed for you to master your driving skills. There are even more new ways to play, with new Daily Challenges bringing different ways to earn fresh rewards to celebrate your driving skills, including the luxurious Mercedes-Maybach S 680 2021, and hot new Custom Build, Lotus Emira Balmain Edition 2021.<br><br>

START AT THE BOTTOM, RACE TO THE TOP.<br>
The world is your canvas in Need for Speed™ Unbound. Prove you have what it takes to win The Grand, Lakeshore's ultimate street racing challenge. Across 4 intense weeks of racing, earn enough cash to enter weekly qualifiers, beat the competition, and make your mark on the street racing scene while outdriving and outsmarting the cops. Pack your garage with precision-tuned, custom rides and light up the streets with your unique style, exclusive fits, and a vibrant global soundtrack led by A$AP Rocky and AWGE that bumps in every corner of the world. Express yourself to the fullest with the freshest new art styles and signature tags that represent what you're all about. With separate single- and multiplayer campaigns, this latest edition in the Need for Speed franchise from Criterion Games™ delivers hours of electric, adrenaline-pumping action.</p>

                        <div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">Info</h4>
								<ul>
									<li>Title<span><?php echo $game_name; ?></span></li>
									<li>Genre<span><?php echo $genre; ?></span></li>
									<li>Release<span><?php echo $release; ?></span></li>
									<li>Review<span>Mostly Positive</span></li>
								</ul>
								<div class="rating">
									
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title"><img src="<?php echo $image_path; ?>" alt="<?php echo $game_name; ?>" width="190"></h4>
								<div class="testim-text">
									<p>Race to the top, definitely don’t flop. Outsmart the cops, and enter weekly qualifiers for The Grand: the ultimate street race. Pack your garage with precision-tuned, custom rides and light up the streets with your style.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->

	


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
				<li><a href="">Home</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
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
