
<nav class="navbar navbar-inverse " style="background-color: #417033; color: #fff;">
<div class="container-fluid">
    <div class="navbar-header">
         <!-- <a class="navbar-brand" href="">DEMO LOGIN</a> -->
         <a href="home.html">
    <img src="Image/Logo.jpg" alt="Logo" class="logo" width= "100px" >
</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="catalogus.html">Catalogus</a></li>
        <li><a href="contact.html">Contact</a></li>
        
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php if ($user!='Login') print 'Welkom '.$user;?></a></li>
        <?php if ($user=='Login') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='Login') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a></li>
    </ul>
</div>
</nav>





