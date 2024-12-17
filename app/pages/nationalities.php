<?php include('../dashboard.php')  ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Flag</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../dbcon.php');

        $query =
            "SELECT * FROM Nationalities";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query failed" . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><img class="player-image" src="<?php echo $row['flag']; ?>" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
</div>

<?php include('../dash_footer.php') ?>