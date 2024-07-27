<?php
session_start();
include_once("config.php");


?>


<head>
<style>
.dropbtn {
  background-color: transparent;
  color: #fff;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #242424;
  min-width: 160px;
  border: none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #333;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #333;
}

	</style>
</head>
<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index.html" class="site-logo">
					<img src="./img/logo.png" alt="">   
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
                    <?php
						if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
							$user_id = $_SESSION['id'];

							$result = mysqli_query($conn, "SELECT image_path FROM users WHERE user_id = '$user_id'");
							$row = mysqli_fetch_array($result);
							$image_path = $row['image_path'];


    						echo "<div class='dropdown'>
              				<button class='dropbtn' name='dropbtn'>
                				" . $_SESSION['username'] . "
								<img class='rounded-circle' src='" . $image_path . "' alt='' style='width: 40px; height: 40px;'>
              				</button>
              					<div class='dropdown-content' name='dropdown-content''>
								  	<a href='profile.php'>Profile</a>
									<a href='mygames.php'>My Game</a>
                					<a href='logout.php'>Log out</a>
              					</div>
          					</div>";
						} else {
    					// User is not logged in, display login/register links
    					echo "<a href='login.php'>Login</a> / <a href='register.php'>Register</a>";
						}
						?>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="games.php">Games</a>
						</li>
						<li><a href="news.php">News</a></li>
						<li><a href="shopping_cart.php">Cart</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>