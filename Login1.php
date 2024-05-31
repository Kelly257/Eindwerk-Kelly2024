<?php
$user="Login";
session_start();
if (isset($_SESSION["user"]))
{
   $user=$_SESSION["user"];
}
 ?>

<!doctype html>
<html lang="nl">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href ="Css/Login.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
   <title>DemoLogin</title>

</head>
<body>
<nav>
   <a href="home.html">
    <img src="Image/Logo.jpg" alt="Logo" class="logo">
</a>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="Over-ons.html">Over ons</a></li>
        <li><a href="Catalogus.html">Catalogus</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li><a href=""><?php if ($user!='Login') print 'Welkom '.$user;?></a></li>
        <?php if ($user=='Login') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='Login') print '<li><a href="Login1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a></li>

        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>

<div class="container">
        <h1>Login</h1>
        <form action="checklogin.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-footer">
                        <p>Heb je nog geen account?<a href="signupForm.php">Sign Up</a></p>
                        <?php 
                        if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                        <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
            </div>

            <input class="btn" type="submit" value="Inloggen">
        </form>
    </div>


