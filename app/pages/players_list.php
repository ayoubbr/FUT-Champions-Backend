<?php include('../dashboard.php');
include('../crud/create.php');
?>
<div class="main-header">
    <div class="navigation_menu">
        <p>Showing <?php echo count($players); ?> results</p>
    </div>
    <div class="navigation_menu">
        <a href="./players_list.php" class="navigation">Players</a>
        <a href="./nationalities.php" class="navigation">Nationalities</a>
        <a href="./clubs.php" class="navigation">Clubs</a>
    </div>
    <div class="add-buttons">
        <a class="navigation" id="add-player">Add new player</a>
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
        foreach ($players as $key => $player) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><img class="player-image" src="<?php echo $player['photo']; ?>" alt=""></td>
                <td><?php echo $player['player_name']; ?></td>
                <td><?php echo $player['rating']; ?></td>
                <td><?php echo $player['position_player']; ?></td>
                <td><?php echo $player['nationality']; ?></td>
                <td><?php echo $player['club']; ?></td>
                <td><?php echo $player['pace']; ?></td>
                <td><?php echo $player['shooting']; ?></td>
                <td><?php echo $player['passing']; ?></td>
                <td><?php echo $player['dribbling']; ?></td>
                <td><?php echo $player['defending']; ?></td>
                <td><?php echo $player['physical']; ?></td>
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
<!-- ============================= modal ============================= -->
<div class="modal-container" id="modal-container">
    <div class="modal">
        <h1>Add a player here</h1>
        <form method="POST" action="../crud/create.php" id="form" class="form">
            <div class="one-line">
                <div class="one-input-box">
                    <label for="name">Player Name</label>
                    <div class="one-input">
                        <input type="text" id="name" name="name" placeholder="e.g Lionel Messi">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="one-input-box">
                    <label for="photo">Image URL</label>
                    <div class="one-input">
                        <input type="text" id="photo" name="photo"
                            placeholder="https://cdn.sofifa.net/players/158/023/25_120.png">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="one-input-box">
                    <label for="nationality">Nationality</label>
                    <div class="one-input">
                        <select id="nationality" name="nationality">
                            <?php
                            foreach ($nationalities as $key => $nationality) {
                            ?>
                                <option value="<?php echo $nationality['id'] ?>">
                                    <?php
                                    echo $nationality['name']
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>

                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="one-input-box">
                    <label for="club">Club</label>
                    <div class="one-input">
                        <!-- <input type="text" id="club" name="club" placeholder="e.g Inter Miami"> -->
                        <select id="club" name="club">
                            <?php
                            foreach ($clubs as $key => $club) {
                            ?>
                                <option value="<?php echo $club['id'] ?>">
                                    <?php
                                    echo $club['name']
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="one-input-box">
                    <label for="rating">Rating</label>
                    <div class="one-input">
                        <input type="number" id="rating" name="rating" placeholder="e.g 95">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="one-input-box">
                    <label for="name">Position</label>
                    <div class="one-input">
                        <select name="positions" id="position">
                            <option disabled selected value="">Select a position</option>
                            <?php foreach ($positionsEnumValuesArray as $value) {  ?>
                                <option value="<?php echo $value ?>">
                                    <?php
                                    echo $value
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
            </div>
            <hr>
            <div id="stats-container" class="stats-container">
                <div class="one-line">
                    <div class="one-input-box">
                        <label for="pace">Pace</label>
                        <div class="one-input">
                            <input type="number" id="pace" name="pace" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamat ion"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="shooting">Shooting</label>
                        <div class="one-input">
                            <input type="number" id="shooting" name="shooting" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="passing">Passing</label>
                        <div class="one-input">
                            <input type="number" id="passing" name="passing" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="dribbling">Dribbling</label>
                        <div class="one-input">
                            <input type="number" id="dribbling" name="dribbling" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="one-input-box">
                        <label for="defending">Defending</label>
                        <div class="one-input">
                            <input type="number" id="defending" name="defending" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="physical">Physical</label>
                        <div class="one-input">
                            <input type="number" id="physical" name="physical" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                </div>
                <div class="one-line">
                    <div class="one-input-box">
                        <label for="diving">diving</label>
                        <div class="one-input">
                            <input type="number" id="diving" name="diving" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="handling">handling</label>
                        <div class="one-input">
                            <input type="number" id="handling" name="handling" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="kicking">kicking</label>
                        <div class="one-input">
                            <input type="number" id="kicking" name="kicking" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="reflexes">reflexes</label>
                        <div class="one-input">
                            <input type="number" id="reflexes" name="reflexes" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="speed">speed</label>
                        <div class="one-input">
                            <input type="number" id="speed" name="speed" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="one-input-box">
                        <label for="positioning">positioning</label>
                        <div class="one-input">
                            <input type="number" id="positioning" name="positioning" placeholder="e.g 99">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-exclamation"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" id="submit" value="submit" name="submit">
        </form>
        <div class="buttons">
            <button class="main-button saveButton" id="saveButton">Save changes</button>
            <button class="main-button" id="submit-button">Submit</button>
            <button class="secondary-button" id="close">Close</button>
        </div>
    </div>
</div>

<!-- ============================= modal ============================= -->
</div>
<script>
    const addPlayer = document.getElementById('add-player');
    const modalContainer = document.getElementById('modal-container');
    const close = document.getElementById('close');
    const submit = document.getElementById('submit');
    const submit_button = document.getElementById('submit-button');

    addPlayer.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });

    close.addEventListener('click', () => {
        modalContainer.classList.remove('show');
    });
    submit.style.display = "none";
    submit_button.addEventListener('click', () => {
        submit.click();
    });
</script>
<?php include('../dash_footer.php') ?>