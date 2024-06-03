<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Rolex</title>

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

<!-- <div class="image-top" style="background-image: url('Image/ROLEX_TOP.JPG');">  -->
    
<!-- Rolex-Heren -->
<div class="image">
           
           <img src="Image/Rolex heren.jpg" alt="Rolex heren" class="product-image">
       </div>

       <div class="product">
           <h2>Rolex Heren</h2>
           <div class="artikel">
               <img src="Image/Datajust36.jpg" alt="Artikel 1" class="artikel-image">
               <h3>Rolex Datajust 36</h3>
               <p class="beschrijving">PRIJS: € 9.300,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/nl/watches/datejust/m126234-0015'" >Less meer</button>
           </div>
           <div class="artikel">
               <img src="image/RolexYach.jpg" alt="Artikel 2" class="artikel-image">
               <h3>Rolex Yacht Master</h3>
               <p class="beschrijving">PRIJS: € 11.750,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/nl/watches/yacht-master/m268622-0002'">Less Meer</button>
           </div>
           <div class="artikel">
               <img src="image/RolexSubamariner.jpg" alt="Artikel 3" class="artikel-image">
               <h3>Rolex submariner</h3>
               <p class="beschrijving">PRIJS: € 10.700,00</p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/nl/watches/submariner/features'">Less Meer</button>
           </div>
       </div>
   </div>

   <!-- Rolex Vrouwen-->
   <div class="image">
          
          <img src="Image/DAMES ROLEX.JPG" alt="Rolex Dames" class="product-image">
      </div>

      <div class="product">
          <h2>Rolex Vrouwen</h2>
          <div class="artikel">
              <img src="Image/RolexDame1.jpg" alt="Artikel 1" class="artikel-image">
              <h3>Rolex Lady Data just Diamant</h3>
              <p class="beschrijving">PRIJS: € 144.000,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/nl/watches/lady-datejust/m279458rbr-0001'" >Less meer</button>
          </div>
          <div class="artikel">
              <img src="image/RolexDame2.jpg" alt="Artikel 2" class="artikel-image">
              <h3>Rolex oyster-perpetual</h3>
              <p class="beschrijving">PRIJS: € 6.400,00</p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/nl/watches/oyster-perpetual/m124300-0008'">Less Meer</button>
          </div>
          <div class="artikel">
              <img src="image/RolexDame3.jpg" alt="Artikel 3" class="artikel-image">
              <h3>Rolex lady submariner</h3>
              <p class="abeschrijving">PRIJS: € 40.400,00 </p>
              <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
              <button class="btn Meer" onclick="window.location.href='https://www.rolex.com/watches/submariner/m126618lb-0002'">Less Meer</button>
          </div>
      </div>

<!----------------Part---------------------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>
</body>
</html>