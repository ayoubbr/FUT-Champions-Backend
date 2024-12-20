<?php
include('../dbcon.php');
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $position = $_POST['positions'];
    $nationality = $_POST['nationality'];
    $club = $_POST['club'];
    $rating = $_POST['rating'];
    $id_details = mysqli_num_rows(mysqli_query($connection, "SELECT id from Players")) + 1;
    $pace = $_POST['pace'];
    $shooting = $_POST['shooting'];
    $passing = $_POST['passing'];
    $dribbling = $_POST['dribbling'];
    $defending = $_POST['defending'];
    $physical = $_POST['physical'];
    $diving = $_POST['diving'];
    $handling = $_POST['handling'];
    $reflexes = $_POST['reflexes'];
    $kicking = $_POST['kicking'];
    $speed = $_POST['speed'];
    $positioning = $_POST['positioning'];

    if ($name != '') {
        $sql = "INSERT INTO `Players` (name, rating, position_player, photo, id_nationality, id_club, id_detail_player)
             VALUES ('$name','$rating','$position','$photo', '$nationality', '$club', '$id_details')";

        $sql_details = "INSERT INTO `Detail_players` VALUES 
         ('$id_details',
            '$pace','$shooting', '$passing', '$dribbling', '$defending', '$physical', 
         '$diving','$handling', '$kicking', '$reflexes', '$speed','$positioning')";

        if (mysqli_query($connection, $sql_details) && mysqli_query($connection, $sql)) {
            header("location: ../pages/players_list.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Name, Class and Marks cannot be empty!";
    }
}
