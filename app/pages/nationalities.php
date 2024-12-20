<?php
include('../dashboard.php');
include('../dbcon.php');
?>
<div class="main-header">
    <div class="navigation_menu">
        <p>Showing <?php echo count($nationalities); ?> results</p>
    </div>
    <div class="navigation_menu">
        <a href="./players_list.php" class="navigation">Players</a>
        <a href="./nationalities.php" class="navigation">Nationalities</a>
        <a href="./clubs.php" class="navigation">Clubs</a>
    </div>
    <div class="add-buttons">
        <a href="#" class="navigation">Add new nationality </a>
    </div>
</div>
<table class="table table-nationalities">
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
        foreach ($nationalities as $key => $nationality) {
        ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><img class="player-image" src="<?php echo $nationality['flag']; ?>" alt=""></td>
                <td><?php echo $nationality['name']; ?></td>
                <td class="last-td">
                    <a class="edit-player"><i class="fa-solid fa-pen-clip"></i></a>
                    <a class="delete-player"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

<?php include('../dash_footer.php') ?>