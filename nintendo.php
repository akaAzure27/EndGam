<?php
include_once("config.php");
include('header.php');
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
			<h2>Games Nintendo Switch</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>  /
				<a href="games.php">Games</a>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-md-7">
					<div class="row">
                    <?php
                    $result = mysqli_query($conn, "SELECT games.game_id, games.game_name, games.image_path, games.game_path, platforms.platform_name
                    FROM games
                    INNER JOIN game_platforms ON games.game_id = game_platforms.game_id
                    INNER JOIN platforms ON game_platforms.platform_id = platforms.platform_id
                    WHERE platforms.platform_name = 'Nintendo Switch' LIMIT 9");

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $game_name = $row['game_name'];
                            $img = $row['image_path'];
                    ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="game-item">
                            <img src="<?php echo $img; ?>" alt="<?php echo $game_name; ?>">
                            <h5><?php echo $game_name; ?></h5>
                            <a href="<?php echo $row["game_path"] ?>" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="<?php echo $row["game_name"] ?>"/></a>
                        </div>
                    </div>

                    <?php
    }
} 
// Close the database connection
$conn->close();
?>
					</div>
					<div class="site-pagination">
						<a href="nintendo.php" class="active">01.</a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="rpg.php">Role-Playing</a></li>
									<li><a href="action.php">Action</a></li>
									<li><a href="strategy.php">Strategy</a></li>
									<li><a href="adventure.php">Adventure</a></li>
									<li><a href="simulation.php">Simulation</a></li>
									<li><a href="sport-racing.php">Sport & Racing</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">platform</h4>
								<ul>
									<li><a href="microsoft.php">Microsoft Windows</a></li>
									<li><a href="xbox.php">X Box One</a></li>
									<li><a href="ps5.php">Play Station 5</a></li>
									<li><a href="ps4.php">Play Station 4</a></li>
									<li><a href="nintendo.php">Nintendo switch</a></li>
									<li><a href="android.php">Android</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
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
