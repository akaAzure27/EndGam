<?php
include_once("config.php");

if(isset($_GET['id'])) {
    $game_id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE game_id = $game_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: shopping_cart.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No row identifier provided";
}
?>