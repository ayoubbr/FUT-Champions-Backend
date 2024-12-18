<?php include('../dashboard.php')  ?>
 <div class="main-header">
            <div class="navigation_menu">
                <p>Showing 17470 results</p>
            </div>
            <div class="navigation_menu">
                <a href="./players_list.php" class="navigation">Players</a>
                <a href="./nationalities.php" class="navigation">Nationalities</a>
                <a href="./clubs.php" class="navigation">Clubs</a>
            </div>
            <div class="add-buttons">
                <a href="#" class="navigation">Add new player</a>
            </div>
        </div>
<table class="table">
    <thead>
        <tr>
            <th>Rank</th>
            <th>Image</th>
            <th>Name</th>
            <th>Rating</th>
            <th>Position</th>
            <th>Nationlity</th>
            <th>Club</th>
            <th>Pac</th>
            <th>Sho</th>
            <th>Pas</th>
            <th>Dri</th>
            <th>Def</th>
            <th>Phy</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../dbcon.php');

        $query =
            "SELECT Players.id, Players.name as player_name, Players.rating,
                Players.position_player,Players.photo, Nationalities.name as nationality, Clubs.name as club,
                Detail_players.pace as pace, Detail_players.shooting as shooting, Detail_players.passing as passing,
                Detail_players.dribbling as dribbling, Detail_players.defending as defending, Detail_players.physical as physical
                FROM Players 
                INNER JOIN Nationalities ON Nationalities.id = Players.id_nationality
                INNER JOIN Clubs ON Clubs.id = Players.id_club
                INNER JOIN Detail_players ON Detail_players.id = Players.id_detail_player";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query failed" . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><img class="player-image" src="<?php echo $row['photo']; ?>" alt=""></td>
                    <td><?php echo $row['player_name']; ?></td>
                    <td><?php echo $row['rating']; ?></td>
                    <td><?php echo $row['position_player']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td><?php echo $row['club']; ?></td>
                    <td><?php echo $row['pace']; ?></td>
                    <td><?php echo $row['shooting']; ?></td>
                    <td><?php echo $row['passing']; ?></td>
                    <td><?php echo $row['dribbling']; ?></td>
                    <td><?php echo $row['defending']; ?></td>
                    <td><?php echo $row['physical']; ?></td>
                    <td class="last-td">
                        <a class="edit-player"><i class="fa-solid fa-pen-clip"></i></a>
                        <a class="delete-player"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
</div>
<?php include('../dash_footer.php') ?>