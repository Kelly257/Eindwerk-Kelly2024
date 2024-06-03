<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Tag-heuer</title>

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
        <li><a href="Login1.php"><i class="fas fa-user"></i> Inloggen</a></li>
        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>

<!-- <div class="image-top" style="background-image: url('Image/Logo1.jpg');">  -->

<!-- FTAG-HEUR-Heren -->
<div class="image">
           
           <img src="Image/TagHeren.jpg" alt="Tag-Heur heren" class="product-image">
       </div>

       <div class="product">
           <h2>TAG-HEUER Heren</h2>
           <div class="artikel">
               <img src="Image/TagHeren11.jpg" alt="Artikel 1" class="artikel-image">
               <h3>Tag-heuer-formula-1</h3>
               <p class="beschrijving">PRIJS: € 2.350,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/nl/en/timepieces/collections/tag-heuer-formula-1/43-mm-quartz-chrono/CAZ101AW.BA0842.html'" >Less meer</button>
           </div>
           <div class="artikel">
               <img src="image/TagHeren2.jpg" alt="Artikel 2" class="artikel-image">
               <h3>Tag-heuer-monaco</h3>
               <p class="beschrijving">PRIJS: € 10.750,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/us/en/timepieces/collections/tag-heuer-monaco/39-mm-calibre-heuer-02-automatic/CBL2182.FT6235.htmll'">Less Meer</button>
           </div>
           <div class="artikel">
               <img src="image/TagHeren3.jpg" alt="Artikel 3" class="artikel-image">
               <h3>Tag-heuer-connected</h3>
               <p class="abeschrijving">PRIJS: € 99,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/be/en/smartwatches/collections/tag-heuer-connected/42-mm/SBR8010.BC6608.html'">Less Meer</button>
           </div>
       </div>
   </div>

   <!-- TAG-HEUR-VROUWEN-->
   <div class="image">
          
          <img src="Image/TagDames.jpg" alt="Tag-heur Dames" class="product-image">
      </div>

      <div class="product">
          <h2>TAG-HEUER vrouwen</h2>
          <div class="artikel">
              <img src="Image/TagDame1.jpg" alt="Artikel 1" class="artikel-image">
              <h3>Tag-heuer-link</h3>
              <p class="beschrijving">PRIJS: € 5.550,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/be/en/timepieces/collections/tag-heuer-link/32-mm-quartz/WBC131G.BA0649.html'" >Less meer</button>
          </div>
          <div class="artikel">
              <img src="image/TagDame2.jpg" alt="Artikel 2" class="artikel-image">
              <h3>Tag-heuer-aquaracer</h3>
              <p class="beschrijving">PRIJS: € 3.400,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/be/en/timepieces/collections/tag-heuer-aquaracer/30-mm-calibre-9-automatic/WBP2415.BA0622.html'">Less Meer</button>
          </div>
          <div class="artikel">
              <img src="image/TagDame3.jpg" alt="Artikel 3" class="artikel-image">
              <h3>tag-heuer-connected</h3>
              <p class="abeschrijving">PRIJS: € 1.400,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.tagheuer.com/be/en/smartwatches/collections/tag-heuer-connected/42-mm/SBR8010.BA0617.html'">Less Meer</button>
          </div>
      </div>


<!----------------Part---------------------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>
</body>
</html>