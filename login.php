<?php
include_once("config.php");
session_start();

if(isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$id' AND password = '$password'");
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['loggedin'] = true;

        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}


.container {
  max-width: 500px;
  margin: 50px auto;
  background-color: #b01ba5;
  padding: 40px;
  border-radius: 5px;
  box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
  -webkit-box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
}
body {
    background-image: url('img/slider-bg-1.jpg');
    background-repeat: no-repeat;
	background-size: cover;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
}

form {
  display: grid;
  gap: 20px;
}

label {
  font-size: 18px;
  display: block;
  margin-bottom: 10px;
}

input,
select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #ddd;
}

input:focus,
select:focus {
  outline: none;
}

input[type="submit"] {
  background-color: #ff2e63;
  color: #fff;
  padding: 10px 20px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #ff4585;
}

    </style>
</head>
<body>
	<div class="container">
		<h1>Sign in</h1>
		<form action="login.php" method="post">
			
			<label for="id">ID:</label>
			<input type="text" id="id" name="id" required>
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			
      <a href="register.php">Sign up?</a>
			<input type="submit" name="submit" value="Sign in">
		</form>
	</div>
</body>
</html>