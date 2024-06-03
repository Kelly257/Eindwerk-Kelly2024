<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Cartier</title>

</head>
<body>
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

<!-- <div class="image-top" style="background-image: url('Image/Logo1.jpg');">  -->
    
<!-- TAG-HEUR-Heren -->
<div class="image">
           
           <img src="Image/Cartierheren" alt="Tag-Heur heren" class="product-image">
       </div>

       <div class="product">
           <h2>Cartier Heren</h2>
           <div class="artikel">
               <img src="Image/Cartierheren1.jpg" alt="Artikel 1" class="artikel-image">
               <h3>santos-de-cartier-horloge</h3>
               <p class="beschrijving">PRIJS: € 11.500,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/nl-nl/santos-de-cartier-horloge_cod1647597339937469.html'" >Less meer</button>
               
           </div>
           <div class="artikel">
               <img src="image/Cartierheren2.jpg" alt="Artikel 2" class="artikel-image">
               <h3>ballon-bleu-de-cartier-horloge</h3>
               <p class="beschrijving">PRIJS: € 19.200,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/nl-nl/ballon-bleu-de-cartier-horloge_cod44733502651450858.html#dept=EU_Ballon-Bleu-de-Cartier'">Less Meer</button>
           </div>
           <div class="artikel">
               <img src="image/Cartierheren3.jpg" alt="Artikel 3" class="artikel-image">
               <h3>tank-louis-cartier-horloge</h3>
               <p class="abeschrijving">PRIJS: € 13.000,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/en-us/watches/collections/tank/tank-louis-cartier-watch--CRWGTA0011.html'">Less Meer</button>
           </div>
       </div>
   </div>

   <!-- CARTIER-VROUWEN-->
   <div class="image">
          
          <img src="Image/Cartierdame.jpg" alt="Cartier Dames" class="product-image">
      </div>

      <div class="product">
          <h2>Cartier vrouwen</h2>
          <div class="artikel">
              <img src="Image/CartierDame1.jpg" alt="Artikel 1" class="artikel-image">
              <h3>tank-francaise-Catier-horloge</h3>
              <p class="beschrijving">PRIJS: € 24.000,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/nl-nl/tank-francaise-horloge_cod1647597304509659.html'" >Less meer</button>
          </div>
          <div class="artikel">
              <img src="image/CartierDame2.jpg" alt="Artikel 2" class="artikel-image">
              <h3>panthere-de-cartier-horloge</h3>
              <p class="beschrijving">PRIJS: € 30.100,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/nl-nl/panthere-de-cartier-horloge_cod1647597306259410.html#dept=EU_Panthere-de-Cartier-Watches'">Less Meer</button>
          </div>
          <div class="artikel">
              <img src="image/CartierDame3.jpg" alt="Artikel 3" class="artikel-image">
              <h3>pasha-de-cartier-horloge</h3>
              <p class="abeschrijving">PRIJS: € 28.400,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.cartier.com/nl-nl/pasha-de-cartier-horloge_cod20346390236037638.html#dept=EU_Pasha-de-Cartier'">Less Meer</button>
          </div>
      </div>

    <!----------------Part---------------------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>
</body>
</html>