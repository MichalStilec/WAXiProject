<?php
session_start();

function logout()
{
    // Unset session variables
    $_SESSION = array();

    session_destroy();

    header("Location: home.php");
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
    <link rel="stylesheet" href="stylemain.css">
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
            <a class="nav-link" href="champs.php">Champions</a>
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
            <div class="col">
                <a href="champs.php">
                    <div class="card">
                        <img class="card-img-top" src="images/Zed.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Champions</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="gallery.php">
                    <div class="card">
                        <img class="card-img-top" src="images/jinx.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Gallery</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="levelgetter.php">
                    <div class="card">
                        <img class="card-img-top" src="images/level.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Level</h5>
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