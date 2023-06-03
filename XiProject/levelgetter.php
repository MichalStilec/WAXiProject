<?php
session_start();

function logout()
{
    // Unset session variables
    $_SESSION = array();

    session_destroy();

    header("Location: levelgetter.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    logout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League Of Legends Wiki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" href="images/LoL_icon.svg.png">
    <link rel="stylesheet" href="styleapi.css">
    <link rel="stylesheet" href="stylegeneral.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-brand-container">
            <a class="navbar-brand" href="home.php">
                <img src="images/LoL_icon.svg.png" alt="Logo" id="logo">
            </a>
        </div>
        <div class="navbar-nav nav-middle">
            <a class="nav-link" href="champs.php">Champions</a>
            <a class="nav-link" href="gallery.php">Gallery</a>
            <a class="nav-link" href="levelgetter.php"><u>Level</u></a>
        </div>
        <div class="navbar-buttons ml-auto">
            <?php if (isset($_SESSION['username'])): ?>
                <a class="nav-link" href="?action=logout"><?php echo $_SESSION['username']; ?></a>
            <?php else: ?>
                <a class="nav-link" href="login.php" id="login">Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container">
        <label for="name">Enter Summoner name</label>
        <input type="text" id="inputname" class="text-input" name="name">
        <p id="resultlevel"></p>
        <button id="submit" class="btn btn-info">Submit</button><br>
        <p id="choices">Select one of the regions</p>
        <p id="choices">EUNE EUW NA KR</p>
        <div class="row radio-group">
            <input type="radio" name="region" value="EUNE" class="selectregionu" id="selectregionuEUNE" checked>
            <input type="radio" name="region" value="EUW" class="selectregionu" id="selectregionuEUW">
            <input type="radio" name="region" value="NA" class="selectregionu" id="selectregionuNA">
            <input type="radio" name="region" value="KR" class="selectregionu" id="selectregionuKR">
        </div>
    </div>



    <footer class="footer">
        <p>&copy; 2023 League Of Legends Wiki.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>

        // This api key only works for 24 hours when created, so it wont 
        // probably work when you are looking at it right now
        let apikey = "RGAPI-647de553-e150-47e0-926f-0e7f5a85d4e4";



        function getLevelEUNE() {
            let name = document.getElementById("inputname").value;

            $.get('https://eun1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' + name + "?api_key=" + apikey, function (data) {
                document.getElementById("resultlevel").innerText = data.summonerLevel;

            }).fail(function () {
                document.getElementById("resultlevel").innerText = "Summoner doesn't exist";
            });
        };
        function getLevelEUW() {
            let name = document.getElementById("inputname").value;

            $.get('https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' + name + "?api_key=" + apikey, function (data) {
                document.getElementById("resultlevel").innerText = data.summonerLevel;

            }).fail(function () {
                document.getElementById("resultlevel").innerText = "Summoner doesn't exist";
            });
        };
        function getLevelNA() {
            let name = document.getElementById("inputname").value;

            $.get('https://na1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' + name + "?api_key=" + apikey, function (data) {
                document.getElementById("resultlevel").innerText = data.summonerLevel;

            }).fail(function () {
                document.getElementById("resultlevel").innerText = "Summoner doesn't exist";
            });
        };
        function getLevelKR() {
            let name = document.getElementById("inputname").value;

            $.get('https://kr.api.riotgames.com/lol/summoner/v4/summoners/by-name/' + name + "?api_key=" + apikey, function (data) {
                document.getElementById("resultlevel").innerText = data.summonerLevel;

            }).fail(function () {
                document.getElementById("resultlevel").innerText = "Summoner doesn't exist";
            });
        };

        function getLevelResult() {
            var radioButtonEUNE = document.getElementById("selectregionuEUNE");
            var radioButtonEUW = document.getElementById("selectregionuEUW");
            var radioButtonNA = document.getElementById("selectregionuNA");
            var radioButtonKR = document.getElementById("selectregionuKR");

            if (radioButtonEUNE.checked) {
                getLevelEUNE();
            }
            if (radioButtonEUW.checked) {
                getLevelEUW();
            }
            if (radioButtonNA.checked) {
                getLevelNA();
            }
            if (radioButtonKR.checked) {
                getLevelKR();
            }
        };

        let submitvalue = document.getElementById("submit");

        submitvalue.addEventListener("click", () => {
            getLevelResult();
        });

        document.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                getLevelResult();
            }
        });

        var selectedRegion = localStorage.getItem("selectedRegion");
        if (selectedRegion) {
            var radioButton = document.getElementById("selectregionu" + selectedRegion);
            if (radioButton) {
                radioButton.checked = true;
            }
        }

        var radioButtons = document.querySelectorAll(".selectregionu");
        radioButtons.forEach(function (radioButton) {
            radioButton.addEventListener("change", function () {
                if (this.checked) {
                    var selectedRegion = this.value;
                    localStorage.setItem("selectedRegion", selectedRegion);
                }
            });
        });
    </script>
</body>

</html>