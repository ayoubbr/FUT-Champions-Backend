<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="shortcut icon" href="assets/game.png" type="image/x-icon">
    <title>Build Team</title>
</head>

<body>
    <?php @include("dbcon.php")    ?>
    <div class="my-container">
        <div class="stad-players">
            <img class="pitch-image" src="./assets/thestadium.png" alt="" />
            <div class="players-container formation-442" id="players-container">
                <div id="player1" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player2" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player3" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player4" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player5" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player6" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player7" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player8" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player9" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player10" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
                <div id="player11" class="position-slot">
                    <img class="playerCard" src="./assets/black-card-removebg-preview.png" alt="" />
                </div>
            </div>
        </div>

        <div class="formation-container">
            <div class="formations">
                <div id="formation-433">4-3-3</div>
                <div id="formation-442" class="active">4-4-2</div>
                <div id="formation-343">3-4-3</div>
            </div>

            <div class="all-players">
                <a href="players.html"> All Players <i class="fa-solid fa-angles-right"></i></a>
            </div>
            <div class="bench">
                <a href="#players" id="scroll-to-players">
                    <div class="bench-button" id="bench-button"> Reserve <i class="fa-solid fa-angles-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <main class="players" id="players">
        <div class="players-heading">
            <h1 class="main-title">EA FC 25 Players</h1>
            <div class="players-filter">
                <a id="add-player" class="main-button">Add player</a>
                <a href="index.html" class="secondary-button">Go back to Team</a>
            </div>
        </div>
        <div class="players-main">
            <div class="players-all" id="players-all">
            </div>
        </div>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>