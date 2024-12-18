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
                <a href="#" class="navigation">Add new club</a>
            </div>
        </div>
<table class="table table-clubs">
    <thead>
        <tr>
            <th>ID</th>
            <th>Flag</th>
            <th>Country</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../dbcon.php');

        $query =
            "SELECT * FROM Clubs";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query failed" . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><img class="player-image" src="<?php echo $row['logo']; ?>" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
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