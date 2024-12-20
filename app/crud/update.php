<?php
// Database connectionection
include('../dbcon.php');
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $id_details = mysqli_real_escape_string($connection, $_POST['id_details']);
    $photo = mysqli_real_escape_string($connection, $_POST['photo']);
    $nationality = mysqli_real_escape_string($connection, $_POST['nationality']);
    $club = mysqli_real_escape_string($connection, $_POST['club']);
    $rating = mysqli_real_escape_string($connection, $_POST['rating']);
    $position = mysqli_real_escape_string($connection, $_POST['positions']);

    $pace = mysqli_real_escape_string($connection, $_POST['pace']);
    $shooting = mysqli_real_escape_string($connection, $_POST['shooting']);
    $passing = mysqli_real_escape_string($connection, $_POST['passing']);
    $dribbling = mysqli_real_escape_string($connection, $_POST['dribbling']);
    $defending = mysqli_real_escape_string($connection, $_POST['defending']);
    $physical = mysqli_real_escape_string($connection, $_POST['physical']);

    $diving = mysqli_real_escape_string($connection, $_POST['diving']);
    $handling = mysqli_real_escape_string($connection, $_POST['handling']);
    $kicking = mysqli_real_escape_string($connection, $_POST['kicking']);
    $reflexes = mysqli_real_escape_string($connection, $_POST['reflexes']);
    $speed = mysqli_real_escape_string($connection, $_POST['speed']);
    $postioning = mysqli_real_escape_string($connection, $_POST['positioning']);

    $query = "UPDATE Players SET name = '$name', photo = '$photo', id_nationality = '$nationality', 
                id_club = '$club', rating = '$rating', position_player = '$position' WHERE id = $id";

    $query_details =  "UPDATE Detail_players SET pace = '$pace', shooting = '$shooting', passing = '$passing', 
                dribbling = '$dribbling', defending = '$defending', physical = '$physical',
                diving = '$diving', handling = '$handling', kicking = '$kicking', reflexes = '$reflexes',
                speed = '$speed', positioning = '$postioning' 
                WHERE id = '$id_details'";

    if (mysqli_query($connection, $query_details) && mysqli_query($connection, $query)) {
        header("location: ../pages/players_list.php");
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    mysqli_close($connection);

    // Redirect back to the main page

    exit();
}
