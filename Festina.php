<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Festina</title>

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

<!-- product -->
<div class="product-pagina">
        <div class="video">
        <video controls  autoplay>
  <source src="Video\Festina1.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
        </div>
<!-- Festina-Heren -->
        <div class="image">
           
            <img src="Image/festinaheren.jpg" alt="Festina heren" class="product-image">
        </div>

        <div class="product">
            <h2>Festina Heren</h2>
            <div class="artikel">
                <img src="Image/Festina Heren 1.jpg" alt="Artikel 1" class="artikel-image">
                <p class="beschrijving">PRIJS: € 119,00 </p>
                <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
                <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/heren/festina/festina-heren-blauw-staal-horloge-armband-f20555_4.html'" >Less meer</button>
            </div>
            <div class="artikel">
                <img src="image/FestinaHeren2.jpg" alt="Artikel 2" class="artikel-image">
                <p class="beschrijving">PRIJS: € 129,00 </p>
                <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
                <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/heren/festina/festina-heren-zilver-timeless-chronograph-staal-horloge-armband-f20343_1.html'">Less Meer</button>
            </div>
            <div class="artikel">
                <img src="image/FestinaHeren3.jpg" alt="Artikel 3" class="artikel-image">
                <p class="abeschrijving">PRIJS: € 99,00 </p>
                <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
                <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/heren/festina/festina-heren-zwart-multifunction-collection-staal-horloge-armband-f20445_6.html'">Less Meer</button>
            </div>
        </div>
    </div>

    <!-- Festina-Dames -->
    <div class="image">
           
           <img src="Image/festinaDame.jpg" alt="Festina Dames" class="product-image">
       </div>

       <div class="product">
           <h2>Festina vrouwen</h2>
           <div class="artikel">
               <img src="Image/FestinaDame1.jpg" alt="Artikel 1" class="artikel-image">
               <p class="beschrijving">PRIJS: € 129,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/dames/festina/festina-dames-rose-boyfriend-collection-staal-horloge-armband-f20503_2.html'" >Less meer</button>
           </div>
           <div class="artikel">
               <img src="image/FestinaDame2.jpg" alt="Artikel 2" class="artikel-image">
               <p class="beschrijving">PRIJS: € 249,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/dames/festina/festina-dames-horloge-f20615_1.html'">Less Meer</button>
           </div>
           <div class="artikel">
               <img src="image/FestinaDame3.jpg" alt="Artikel 3" class="artikel-image">
               <p class="beschrijving">PRIJS: € 119,00 </p>
               <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
               <button class="btn Meer" onclick="window.location.href='https://festina.com/nl-BE/klok/dames/festina/festina-dames-zwart-mademoiselle-staal-horloge-armband-f20496_2.html'">Less Meer</button>
           </div>
       </div>
<!-- Partenaires -->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?>
</body>
</html>