<!-- CLEVAR KELLY ISHIMWE _ 6 IF_ EINDEWERK 2023/2024 -->

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
<nav>
   <a href="home.html">
    <img src="Image/Logo.jpg" alt="Logo" class="logo">
</a>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="Over-ons.php">Over ons</a></li>
        <li><a href="Catalogus.php">Catalogus</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <!-- <li><a href="addPage.php">Add page</a></li>
        <li><a href="producten.php">Producten</a></li> -->
        <li><a href="login.php"><i class="fas fa-user"></i> Inloggen</a></li>
        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>

<div class="image-top" style="background-image: url('Image/Logo1.jpg');"> 

</div>





<div class="product">
    <h2>Populaire horloges</h2>
    <div class="artikel">
        <img src="Image/Datajust36.jpg" alt="Artikel 1" class="artikel-image">
        <h3>Datajust36</h3>
        <p class="beschrijving">PRIJS: € 9.300,00 </p>
        <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
        <button class="btn Meer" onclick="window.location.href='rolex.php'" >Less meer</button>
    </div>
    <div class="artikel">
        <img src="Image/OmegaDame1.jpg" alt="Artikel 2" class="artikel-image">
        <h3>omega-constellation-Lady</h3>
        <p class="beschrijving">PRIJS: € 37.800,00</p>
        <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
        <button class="btn Meer" onclick="window.location.href='Omega.php'">Less Meer</button>
    </div>
    <div class="artikel">
        <img src="Image/FestinaHeren2.jpg" alt="Artikel 3" class="artikel-image">
        <h3>festina-horloge-klassiek</h3>
        <p class="abeschrijving">PRIJS: € 129,00  </p>
        <button class="btn Toevoegen" onclick="window.location.href='add_to_cart.php?id=<?php echo $product_id; ?>'">Voeg toe aan je winkelmandje</button>
        <button class="btn Meer" onclick="window.location.href='Festina.php'">Less Meer</button>
    </div>
</div>

<div class="product-pagina">
        <div class="video">
        <video controls  autoplay>
  <source src="Video\Festina2.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
        </div>

        <!-- Oprichteur et CEO  -->
<div class="founder-section">
    <h2>Onze Oprichter en CEO</h2>
    <div class="founder-profile">
        <img src="Image/Kelly.jpg" alt="Clevar Kelly Ishimwe" class="founder-image">
        <div class="founder-info">
            <h3>Clevar Kelly Ishimwe</h3>
            <p>Clevar Kelly Ishimwe is de oprichter en CEO van Elegant Horloges. Met een passie voor horloges en een toewijding aan uitzonderlijke service, heeft hij Elegant Horloges opgericht om meer te bieden dan alleen een winkel - een unieke ervaring.</p>
        </div>
    </div>
</div>










<!----------------Part---------------------------------->
<?php include "Part.php"; ?>
<!-------------------------------footer---------------------------------------------->
<?php include "footer.php"; ?>

    
</body>
</html>