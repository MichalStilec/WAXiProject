<?php
session_start();

function logout()
{
    // Unset session variables
    $_SESSION = array();

    session_destroy();

    header("Location: gallery.php");
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
            <a class="nav-link" href="champs.php">Champions</a>
            <a class="nav-link" href="gallery.php"><u>Gallery</u></a>
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
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/fight.jpg" id="galleryimg" alt="Image 1">
                    <div class="image-text">Fight between teams</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/dragon.jpg" id="galleryimg" alt="Image 2">
                    <div class="image-text">Fire drake</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/baron.jpg" id="galleryimg" alt="Image 3">
                    <div class="image-text">Baron Nashor</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/herald.jpg" id="galleryimg" alt="Image 4">
                    <div class="image-text">Herald</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/morganakayle.jpg" id="galleryimg" alt="Image 5">
                    <div class="image-text">Morgana VS Kayle</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/map.jpg" id="galleryimg" alt="Image 6">
                    <div class="image-text">Ingame map</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">                
                    <img src="images/something.jpg" id="galleryimg" alt="Image 7">
                    <div class="image-text">Wild rift</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/wildrift.jpg" id="galleryimg" alt="Image 8">
                    <div class="image-text">Team</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="images/idk.jpg" id="galleryimg" alt="Image 9">
                    <div class="image-text">Login image</div>
                </div>
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