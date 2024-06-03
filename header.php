<?php
session_start();
$user = "Login";
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Elegant-Holorges</title>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #417033; color: #fff;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="home.php">
                <img src="Image/Logo.jpg" alt="Logo" class="logo" width="100px">
            </a>
            <span class="navbar-toggle"><i class="fas fa-bars"></i></span>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="Over-ons.php">Over ons</a></li>
            <li><a href="Catalogus.php">Catalogus</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href=""><?php if ($user != 'Login') print 'Welkom ' . $user; ?></a></li>
            <?php if ($user == 'Login') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>'; ?>
            <?php if ($user == 'Login') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>'; ?>
            <li><a href="logout.php"><?php if ($user != 'Login') print 'Logout'; ?></a></li>
            <li><a href="winkelmandje.php"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('.navbar-toggle');
        const navLinks = document.querySelectorAll('.nav.navbar-nav');

        toggleButton.addEventListener('click', function() {
            navLinks.forEach(nav => nav.classList.toggle('active'));
        });
    });
</script>
</body>
</html>
