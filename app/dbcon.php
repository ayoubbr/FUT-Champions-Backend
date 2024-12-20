<?php

define("SERVERNAME", "db");
define("USERNAME", "my_user");
define("PASSWORD", "my_password");
define("DATABASE", "FUT_backend_database");

$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection FFailed!");
}

$query_clubs = "SELECT * FROM Clubs";
$result1 = mysqli_query($connection, $query_clubs);
$clubs = [];
while ($row = mysqli_fetch_assoc($result1)) {
    $clubs[] = $row;
}


$query_players =
    "SELECT Players.id, Players.name as player_name, Players.rating,
                Players.position_player,Players.photo, Nationalities.name as nationality, Nationalities.flag as flag, Clubs.name as club, Clubs.logo as logo,
               Detail_players.id as id_details, Detail_players.pace as pace, Detail_players.shooting as shooting, Detail_players.passing as passing,
                Detail_players.dribbling as dribbling, Detail_players.defending as defending, Detail_players.physical as physical
                , Detail_players.handling as handling, Detail_players.diving as diving, Detail_players.reflexes as reflexes
                , Detail_players.speed as speed, Detail_players.positioning as positioning, Detail_players.kicking as kicking
                FROM Players 
                INNER JOIN Nationalities ON Nationalities.id = Players.id_nationality
                INNER JOIN Clubs ON Clubs.id = Players.id_club
                INNER JOIN Detail_players ON Detail_players.id = Players.id_detail_player";

$result2 = mysqli_query($connection, $query_players);
$players = [];
while ($row = mysqli_fetch_assoc($result2)) {
    $players[] = $row;
}


$query_nationalities = "SELECT * FROM Nationalities";
$result3 = mysqli_query($connection, $query_nationalities);
$nationalities = [];
while ($row = mysqli_fetch_assoc($result3)) {
    $nationalities[] = $row;
}

$sql_enum = "SHOW COLUMNS FROM `Players` LIKE 'position_player'";
$result4 = mysqli_query($connection, $sql_enum);

if ($result4 && $row = mysqli_fetch_assoc($result4)) {
    $enumValues = $row['Type'];
    $enumValues = str_replace(["enum(", ")", "'"], "", $enumValues);

    $positionsEnumValuesArray = explode(",", $enumValues);
}
