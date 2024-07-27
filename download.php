<?php
if (isset($_POST['game_image'])) {
    $game_image = $_POST['game_image'];
    
    // Fetch the game data from the database using the game ID
    
    // Set the appropriate headers for the file download
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="' . $game_image . '.jpg"');
    
    // Output the image file contents to the user
    readfile($game_image);
    
    // Exit the script to prevent any further output
    exit();
  }
?>