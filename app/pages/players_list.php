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
                <td><img src="<?php echo $player['flag']; ?>" alt="" height="28px"></td>
                <td><img src="<?php echo $player['logo']; ?>" alt="" height="40px"></td>
                <td><?php echo $player['pace']; ?></td>
                <td><?php echo $player['shooting']; ?></td>
                <td><?php echo $player['passing']; ?></td>
                <td><?php echo $player['dribbling']; ?></td>
                <td><?php echo $player['defending']; ?></td>
                <td><?php echo $player['physical']; ?></td>
                <td class="last-td">
                    <a class="edit-player"
                        data-id="<?php echo $player['id']; ?>"
                        data-photo="<?php echo $player['photo']; ?>"
                        data-name="<?php echo $player['player_name']; ?>"
                        data-rating="<?php echo $player['rating']; ?>"
                        data-position="<?php echo $player['position_player']; ?>"
                        data-nationality="<?php echo $player['nationality']; ?>"
                        data-club="<?php echo $player['club']; ?>"
                        data-pace="<?php echo $player['pace']; ?>"
                        data-shooting="<?php echo $player['shooting']; ?>"
                        data-passing="<?php echo $player['passing']; ?>"
                        data-dribbling="<?php echo $player['dribbling']; ?>"
                        data-defending="<?php echo $player['defending']; ?>"
                        data-physical="<?php echo $player['physical']; ?>"
                        data-diving="<?php echo $player['diving']; ?>"
                        data-handling="<?php echo $player['handling']; ?>"
                        data-reflexes="<?php echo $player['reflexes']; ?>"
                        data-speed="<?php echo $player['physical']; ?>"
                        data-kicking="<?php echo $player['kicking']; ?>"
                        data-positioning="<?php echo $player['positioning']; ?>"
                        data-id-details="<?php echo $player['id_details']; ?>"
                        >
                        <i class="fa-solid fa-pen-clip"></i></a>
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
                <div class="one-input-box id_details">
                    <label for="name">id details</label>
                    <div class="one-input">
                        <input type="text" id="id_details" value="<?php echo $player['id_details'] ?>" name="id_details" >
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-exclamation"></i>
                        <small>Error message</small>
                    </div>
                </div>
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
    const form = document.getElementById('form');
    const playerName = document.getElementById('name');
    const photo = document.getElementById('photo');
    const position = document.getElementById('position');
    const nationality = document.getElementById('nationality');
    const club = document.getElementById('club');
    const rating = document.getElementById('rating');
    const addPlayer = document.getElementById('add-player');
    const modalContainer = document.getElementById('modal-container');
    const close = document.getElementById('close');
    const submit = document.getElementById('submit');
    const submit_button = document.getElementById('submit-button');

    addPlayer.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });

    document.querySelectorAll('.edit-player').forEach(button => {
        button.addEventListener('click', function() {
            const playerId = this.getAttribute("data-id");
            const playerIdDetails = this.getAttribute("data-id-details");
            const playerPhoto = this.getAttribute("data-photo");
            const playerName = this.getAttribute("data-name");
            const playerRating = this.getAttribute("data-rating");
            const playerPosition = this.getAttribute("data-position");
            const playerNationality = this.getAttribute("data-nationality");
            const playerClub = this.getAttribute("data-club");
            const playerPace = this.getAttribute("data-pace");
            const playerShooting = this.getAttribute("data-shooting");
            const playerPassing = this.getAttribute("data-passing");
            const playerDribbling = this.getAttribute("data-dribbling");
            const playerDefending = this.getAttribute("data-defending");
            const playerPhysical = this.getAttribute("data-physical");
            const playerDiving = this.getAttribute("data-diving");
            const playerReflexes = this.getAttribute("data-reflexes");
            const playerSpeed = this.getAttribute("data-speed");
            const playerKicking = this.getAttribute("data-kicking");
            const playerHandling = this.getAttribute("data-handling");
            const playerPositiong = this.getAttribute("data-positioning");

            Array.from(nationality.options).forEach(option => {
                if (option.text.trim() === playerNationality.trim()) {
                    nationality.value = option.value;
                }
            });

            Array.from(club.options).forEach(option => {
                if (option.text.trim() === playerClub.trim()) {
                    club.value = option.value;
                }
            });

            document.getElementById("name").value = playerName;
            document.getElementById("photo").value = playerPhoto;
            document.getElementById("rating").value = playerRating;
            document.getElementById("position").value = playerPosition;
            document.getElementById("pace").value = playerPace;
            document.getElementById("shooting").value = playerShooting;
            document.getElementById("passing").value = playerPassing;
            document.getElementById("dribbling").value = playerDribbling;
            document.getElementById("defending").value = playerDefending;
            document.getElementById("physical").value = playerPhysical;
            document.getElementById("diving").value = playerDiving;
            document.getElementById("speed").value = playerSpeed;
            document.getElementById("reflexes").value = playerReflexes;
            document.getElementById("passing").value = playerSpeed;
            document.getElementById("kicking").value = playerKicking;
            document.getElementById("handling").value = playerHandling;
            document.getElementById("positioning").value = playerPositiong;
            document.getElementById("id_details").value = playerIdDetails;

            const form = document.getElementById("form");
            form.action = `../crud/update.php?id=${playerId}`;

            modalContainer.classList.add('show');

        });
    });



    close.addEventListener('click', () => {
        modalContainer.classList.remove('show');
    });

    submit.style.display = "none";


    function checkInputs() {
        let isValid = true;

        const playerNameValue = playerName.value.trim();
        const photoValue = photo.value.trim();
        const positionValue = position.value.trim();
        const nationalityValue = nationality.value.trim();
        const clubValue = club.value.trim();
        const ratingValue = rating.value.trim();


        divingValue = document.getElementById("diving")?.value.trim();
        handlingValue = document.getElementById("handling")?.value.trim();
        kickingValue = document.getElementById("kicking")?.value.trim();
        reflexesValue = document.getElementById("reflexes")?.value.trim();
        speedValue = document.getElementById("speed")?.value.trim();
        positioningValue = document.getElementById("positioning")?.value.trim();

        if (divingValue === '') {
            setErrorFor(diving, 'diving cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(divingValue, 1, 99)) {
            setErrorFor(diving, 'diving should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(diving);
        }


        if (handlingValue === '') {
            setErrorFor(handling, 'handling cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(handlingValue, 1, 99)) {
            setErrorFor(handling, 'handling should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(handling);
        }


        if (kickingValue === '') {
            setErrorFor(kicking, 'kicking cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(kickingValue, 1, 99)) {
            setErrorFor(kicking, 'kicking should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(kicking);
        }


        if (reflexesValue === '') {
            setErrorFor(reflexes, 'reflexes cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(reflexesValue, 1, 99)) {
            setErrorFor(reflexes, 'reflexes should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(reflexes);
        }


        if (speedValue === '') {
            setErrorFor(speed, 'speed cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(speedValue, 1, 99)) {
            setErrorFor(speed, 'speed should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(speed);
        }


        if (positioningValue === '') {
            setErrorFor(positioning, 'positioning cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(positioningValue, 1, 99)) {
            setErrorFor(positioning, 'positioning should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(positioning);
        }


        paceValue = document.getElementById("pace")?.value.trim();
        shootingValue = document.getElementById("shooting")?.value.trim();
        passingValue = document.getElementById("passing")?.value.trim();
        dribblingValue = document.getElementById("dribbling")?.value.trim();
        defendingValue = document.getElementById("defending")?.value.trim();
        physicalValue = document.getElementById("physical")?.value.trim();

        if (paceValue === '') {
            setErrorFor(pace, 'Pace cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(paceValue, 1, 99)) {
            setErrorFor(pace, 'Pace should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(pace);
        }


        if (shootingValue === '') {
            setErrorFor(shooting, 'Shooting cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(shootingValue, 1, 99)) {
            setErrorFor(shooting, 'Shooting should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(shooting);
        }


        if (passingValue === '') {
            setErrorFor(passing, 'Passing cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(passingValue, 1, 99)) {
            setErrorFor(passing, 'passing should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(passing);
        }


        if (dribblingValue === '') {
            setErrorFor(dribbling, 'Dribbling cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(dribblingValue, 1, 99)) {
            setErrorFor(dribbling, 'dribbling should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(dribbling);
        }


        if (defendingValue === '') {
            setErrorFor(defending, 'Defending cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(defendingValue, 1, 99)) {
            setErrorFor(defending, 'defending should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(defending);
        }


        if (physicalValue === '') {
            setErrorFor(physical, 'Physical cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(physicalValue, 1, 99)) {
            setErrorFor(physical, 'physical should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(physical);
        }


        if (playerNameValue === '') {
            setErrorFor(playerName, 'Player name cannot be empty!');
            isValid = false;
        } else {
            setSuccessFor(playerName);
        }


        if (photoValue === '') {
            setErrorFor(photo, 'Photo cannot be empty!');
            isValid = false;
        } else if (!URL.canParse(photoValue)) {
            setErrorFor(photo, 'Photo url is not valid!');
            isValid = false;
        } else {
            setSuccessFor(photo);
        }

        if (positionValue === '') {
            setErrorFor(position, 'Position cannot be empty!');
            isValid = false;
        } else {
            setSuccessFor(position);
        }


        if (nationalityValue === '') {
            setErrorFor(nationality, 'Nationality cannot be empty!');
            isValid = false;
        } else {
            setSuccessFor(nationality);
        }

        if (clubValue === '') {
            setErrorFor(club, 'Club cannot be empty!');
            isValid = false;
        } else {
            setSuccessFor(club);
        }

        if (ratingValue === '') {
            setErrorFor(rating, 'Rating cannot be empty!');
            isValid = false;
        } else if (!isValidNumber(ratingValue, 1, 99)) {
            setErrorFor(rating, 'rating should be between 1 and 99!');
            isValid = false;
        } else {
            setSuccessFor(rating);
        }

        return isValid;
    }

    function setErrorFor(input, message) {
        if (!input) return;
        const oneInput = input.parentElement;
        if (!oneInput) return;
        const small = oneInput.querySelector('small');
        small.innerText = message;
        oneInput.className = 'one-input error';
    }

    function setSuccessFor(input) {
        if (!input) return;
        const oneInput = input.parentElement;
        if (!oneInput) return;
        oneInput.className = 'one-input success';
    }

    submit_button.addEventListener('click', (e) => {
        e.preventDefault();

        if (checkInputs()) {
            submit.click();
            form.reset();
        };

    });

    function isValidNumber(input, min, max) {
        const regex = new RegExp(`^(${min}|${max}|([1-9][0-9]*))$`);
        if (regex.test(input)) {
            const num = Number(input);
            return num >= min && num <= max;
        }
        return false;
    }
</script>
<?php include('../dash_footer.php') ?>