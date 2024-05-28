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
   <link rel="stylesheet" href ="Login.css">
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
        <?php if ($user=='Login') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a></li>

        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>      
    <div class="container">
        <div class="row">
            <h1>Sign Up</h1>
        </div>
        <div class="row">
            <section class="container-fluid">
          
            <section class="row justify-content-center">
            <section class="col-12 col-sm-8 col-md-6">
                <form class="form-container" action="signup1.php" method="post" autocomplete="off" >                  
                             
                    <div class="form-group">
                        <label for="InputName">Gebruikersnaam</label>
                        <span class="glyphicon glyphicon-user"></span>
                        <input type="text" name="username" id="username" required>                                    
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <span class="glyphicon glyphicon-lock"></span>
                        <input type="text" name="password1" id="password1" required>                                    
                    </div>
                    <div class="form-group">
                        <label for="InputPassword2">Password (herhaal)</label>
                        <span class="glyphicon glyphicon-lock"></span>
                        <input type="text" name="password2" id="password2" required>
                                    
                    </div>
                    <div class="form-group">
                     <span class="glyphicon glyphicon-user"></span><input class="btn btn-primary" type="submit" value="SUBMIT" alt='person'>
                    </div>
                    <div class="form-footer">
                        <p> Heb je al een account? <a href="Login1.php">Login</a></p>
                    </div>
                    <?php 
                    if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                    <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
                </form>
         </div>
    </div>
    
    </body>
</html>