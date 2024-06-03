<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Omega</title>

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

<!-- Omega-Heren -->
<div class="image">
           
           <img src="Image/Omegaheren.jpg" alt="Omega heren" class="product-image">
       </div>

       <div class="product">
           <h2>Omega Heren</h2>
           <div class="artikel">
               <img src="Image/Omegaheren1.jpg" alt="Artikel 1" class="artikel-image">
               <h3>omega-constellation-globemaster</h3>
               <p class="beschrijving">PRIJS: € 14.300,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-constellation-globemaster-co-axial-master-chronometer-annual-calendar-41-mm-13023412211001'" >Less meer</button>
           </div>
           <div class="artikel">
               <img src="image/Omegaheren2.jpg" alt="Artikel 2" class="artikel-image">
               <h3>omega-seamaster-diver-300m</h3>
               <p class="beschrijving">PRIJS: € 9.200,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-seamaster-diver-300m-co-axial-master-chronometer-42-mm-21030422003002'">Less Meer</button>
           </div>
           <div class="artikel">
               <img src="image/Omegaheren3.jpg" alt="Artikel 3" class="artikel-image">
               <h3>omega-de-ville-prestige</h3>
               <p class="beschrijving">PRIJS: € 6.700,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-de-ville-prestige-co-axial-master-chronometer-power-reserve-41-mm-43410412103001'">Less Meer</button>
           </div>
       </div>
   </div>

   <!-- Omega-VROUWEN-->
   <div class="image">
          
          <img src="Image/Omegadame.jpg" alt="Omega Dames" class="product-image">
      </div>

      <div class="product">
          <h2>Omega vrouwen</h2>
          <div class="artikel">
              <img src="Image/OmegaDame1.jpg" alt="Artikel 1" class="artikel-image">
              <h3>omega-constellation-Lady</h3>
              <p class="beschrijving">PRIJS: € 37.800,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-constellation-co-axial-master-chronometer-29-mm-13155292053003'" >Less meer</button>
          </div>
          <div class="artikel">
              <img src="image/OmegaDame2.jpg" alt="Artikel 2" class="artikel-image">
              <h3>omega-de-ville-mini-tresor</h3>
              <p class="beschrijving">PRIJS: € 5.200,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-de-ville-mini-tresor-quartz-26-mm-42818266004003'">Less Meer</button>
          </div>
          <div class="artikel">
              <img src="image/OmegaDame3.jpg" alt="Artikel 3" class="artikel-image">
              <h3>omega-seamaster-aqua-terra</h3>
              <p class="abeschrijving">PRIJS: € 7.100,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.omegawatches.com/watch-omega-seamaster-aqua-terra-150m-co-axial-master-chronometer-41-mm-22012412103008'">Less Meer</button>
          </div>
      </div>

</div>
<!----------------Part---------------------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>
</body>
</html>