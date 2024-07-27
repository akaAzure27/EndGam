<?php
include_once("config.php");
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $image_path = 'img/profile/guest.jpg';
    $desc = "No information given";

    $result = mysqli_query($conn, ("INSERT INTO users(user_id, username, password, email, birthdate, image_path, description)
    VALUES('{$_SESSION['id']}', '{$_SESSION['username']}', '{$_SESSION['password']}', '{$_SESSION['email']}', '{$_SESSION['birthdate']}', '{$image_path}', '{$desc}' )"));

    header('Location: index.php?');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
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
		<h1>Registration Form</h1>
		<form action="" method="post">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			
			<label for="birthdate">Birth Date:</label>
			<input type="date" id="birthdate" name="birthdate" required>
			
			<label for="id">ID:</label>
			<input type="text" id="id" name="id" required>

            <label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			
			<input type="submit" name="submit" value="Register">
		</form>
	</div>
</body>
</html>