<?php
session_start();

function logout()
{
    // Unset session variables
    $_SESSION = array();

    session_destroy();

    header("Location: champs.php");
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
    <link rel="stylesheet" href="stylesecondary.css">
    <link rel="stylesheet" href="stylegeneral.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-brand-container">
            <a class="navbar-brand" href="home.php">
                <img src="images/LoL_icon.svg.png" alt="Logo" id="logo">
            </a>
        </div>
        <div class="navbar-nav nav-middle">
            <a class="nav-link" href="champs.php"><u>Champions</u></a>
            <a class="nav-link" href="gallery.php">Gallery</a>
            <a class="nav-link" href="levelgetter.php">Level</a>
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
        <div class="row">
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/akshan/">
                    <div class="card">
                        <img class="card-img-top" src="images/akshanicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Akshan</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/braum/">
                    <div class="card">
                        <img class="card-img-top" src="images/braum icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Braum</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/corki/">
                    <div class="card">
                        <img class="card-img-top" src="images/corkiicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Corki</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/fizz/">
                    <div class="card">
                        <img class="card-img-top" src="images/fizz icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Fizz</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/gragas/">
                    <div class="card">
                        <img class="card-img-top" src="images/gragasicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Gragas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/illaoi/">
                    <div class="card">
                        <img class="card-img-top" src="images/illaoi icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Illaoi</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/katarina/">
                    <div class="card">
                        <img class="card-img-top" src="images/katarinaicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Katarina</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/kled/">
                    <div class="card">
                        <img class="card-img-top" src="images/kledicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Kled</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/lilia/">
                    <div class="card">
                        <img class="card-img-top" src="images/liliaicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Lilia</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/lucian/">
                    <div class="card">
                        <img class="card-img-top" src="images/lucianicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Lucian</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/miss-fortune/">
                    <div class="card">
                        <img class="card-img-top" src="images/miss icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Miss Fortune</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/nami/">
                    <div class="card">
                        <img class="card-img-top" src="images/nami icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Nami</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/senna/">
                    <div class="card">
                        <img class="card-img-top" src="images/senna icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Senna</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/skarner/">
                    <div class="card">
                        <img class="card-img-top" src="images/scarner icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Skarner</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/soraka/">
                    <div class="card">
                        <img class="card-img-top" src="images/sorakaicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Soraka</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/taric/">
                    <div class="card">
                        <img class="card-img-top" src="images/taric icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Taric</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/teemo/">
                    <div class="card">
                        <img class="card-img-top" src="images/teemoicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Teemo</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/viego/">
                    <div class="card">
                        <img class="card-img-top" src="images/viego.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Viego</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/xayah/">
                    <div class="card">
                        <img class="card-img-top" src="images/xazah icon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Xayah</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.leagueoflegends.com/en-pl/champions/zed/">
                    <div class="card">
                        <img class="card-img-top" src="images/zedicon.jpg" alt="Card image">
                        <div class="card-overlay">
                            <h5 class="card-title">Zed</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <p>&copy; 2023 League Of Legends Wiki.</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    
    </html>
    