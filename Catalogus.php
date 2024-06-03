<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Catalogus</title>

</head>
<body>
    <header>
<nav>
   <a href="home.html">
    <img src="Image/Logo.jpg" alt="Logo" class="logo">
</a>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="Over-ons.php">Over ons</a></li>
        <li><a href="Catalogus.php">Catalogus</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="login.php"><i class="fas fa-user"></i> Inloggen</a></li>
        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>
</header>


<!------------------------------------------------------CATALOGUS--------------------->
<div class="container-catalogus">
    <div class="box" style="background-image: url('image/Rolex-logo.jpg');">

        <a href="Rolex.php">Ontdek meer</a>
        
    </div>
    <div class="box" style="background-image: url('image/Cartier-logo.jpg');">
        
        <a href="Cartier.php">Ontdek meer </a>
        
    </div>
    <div class="box" style="background-image: url('image/Omega-logo.jpg');">
        
        <a href="Omega.php">Ontdek meer</a>
        
    </div>
    <div class="box" style="background-image: url('image/Tag-heur-logo.jpg');">
        
        <a href="Tag-heuer.php">Ontdek meer</a>
      
    </div>
    <div class="box" style="background-image: url('image/Jacob&co-logo.jpg');">
        
        <a href="Jacob&Co.php">Ontdek meer</a>
     
    </div>
    <div class="box" style="background-image: url('image/brand-logo-festina.jpg');">
        
        <a href="Festina.php">Ontdek meer</a>
        
    </div>
   
</div>

<!-----------------------------Partenaire------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>   
</body>
</html>