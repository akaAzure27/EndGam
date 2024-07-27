<?php
session_start(); // Start session if not already started
include_once("config.php");

// Check if file was uploaded
if(isset($_POST['submit'])) {
	$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
	$old_username = mysqli_real_escape_string($conn, $_POST['old_username']);
	$old_email = mysqli_real_escape_string($conn, $_POST['old_email']);
	$old_birthdate = mysqli_real_escape_string($conn, $_POST['old_birthdate']);
	$old_description = mysqli_real_escape_string($conn, $_POST['old_description']);

	// Get form input
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
	$description = mysqli_real_escape_string($conn, $_POST['my-text-field']);
    $result = mysqli_query($conn, "UPDATE users SET username='$username', email='$email', birthdate='$birthdate', description='$description' WHERE user_id = '$user_id'");
    
    // Execute the query
    if($result) {
        // Update the session with the new data
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['birthdate'] = $birthdate;
        $_SESSION['description'] = $description;
        
        // Redirect the user to the profile page
        
    } 

if(isset($_FILES['profile-image'])) {
    // File properties
    $file_name = $_FILES['profile-image']['name'];
    $file_size = $_FILES['profile-image']['size'];
    $file_tmp = $_FILES['profile-image']['tmp_name'];
    $file_type = $_FILES['profile-image']['type'];

    // Get file extension
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Allowed file types
    $allowed_ext = array('jpg', 'jpeg', 'png');

    // Check if file type is allowed
    if(in_array($file_ext, $allowed_ext)) {
        // File path on server
        $file_path = 'img/profile/' . $file_name;

        // Move file to new location
        move_uploaded_file($file_tmp, $file_path);

        // Update image_path in users table
        $user_id = $_SESSION['id']; // Get user ID from session or wherever it's stored
        $stmt = $conn->prepare("UPDATE users SET image_path = '$file_path' WHERE user_id = '$user_id'");

        $stmt->execute();
        $stmt->close();

        // Redirect to profile pagey
        header("Location: profile.php");
        exit();
    } else {
        echo "Error: File type not allowed";
    }
}
}
?>