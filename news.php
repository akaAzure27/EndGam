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
	
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="page-info">
			<h2>News</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>  /
				<span>News</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<ul class="blog-filter">
                        <li><a href="rpg.php">Role-Playing</a></li>
						<li><a href="action.php">Action</a></li>
						<li><a href="strategy.php">Strategy</a></li>
						<li><a href="adventure.php">Adventure</a></li>
					</ul>
					<div class="big-blog-item">
						<img src="img/games/pubg.jpg" style="width: 855; height: 349;" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">Get in <a href="">Games</a></div>
							<h3>The best Battle Royale games on the market</h3>
							<p>Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS</p>
							<a href="pubg.php" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="img/games/nfs.jpg" style="width: 855; height: 349;" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">Get in <a href="">Games</a></div>
							<h3>The best Racing game is out now!</h3>
							<p>Race to the top, definitely don’t flop. Outsmart the cops, and enter weekly qualifiers for The Grand: the ultimate street race. Pack your garage with precision-tuned, custom rides and light up the streets with your style.</p>
							<a href="nfs.php" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="img/games/thesims.jpg" style="width: 855; height: 349;" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">Get in <a href="">Games</a></div>
							<h3>The best simulation game is out now!</h3>
							<p>Play with life and discover the possibilities. Unleash your imagination and create a world of Sims that’s wholly unique. Explore and customize every detail from Sims to homes–and much more.</p>
							<a href="thesims.php" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<div class="site-pagination">
						<a href="#" class="active">01.</a>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<form class="search-widget">
								<input type="text">
								<button>search</button>
							</form>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
                                <?php
								$result = mysqli_query($conn, "SELECT game_name, image_path FROM games ORDER BY RAND() LIMIT 4");
								
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$game_name = $row['game_name'];
										$img = $row['image_path'];
								?>
								<div class="tw-item">
									<div class="tw-thumb">
									<img src="<?php echo $img; ?>" alt="<?php echo $game_name; ?>" width="80" height="80">
									</div>
									<div class="tw-text">
										<div class="tw-meta">Get in <a href="games.php">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<?php
									}
								} 
								?>
								</div>
							</div>
						</div>
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
							<h4 class="widget-title">Latest Comments</h4>
							<div class="latest-comments">
								<div class="lc-item">
									<img src="./img/blog-widget/1.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/2.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/3.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/4.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<a href="fifa.php" class="add">
								<img src="./img/add.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="img/icons/double-arrow.png" alt="#"/></button>
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
