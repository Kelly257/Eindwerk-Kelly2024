<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="shortcut icon" href="image/Logo.jpg" type="image/x-icon">
    <title>Contact</title>

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
<!-----------------------------CONTACT PAGINA___-->


    <h1 id="contact">Contacteer ons</h1>

    <section class="contact-info">
        <h2>Contactgegevens</h2>
        <p><b>Adres:</b> Grote-Markt 01, 8500 KORTRIJK</p>
        <p><b>Telefoon:</strong>+3204546587</p>
        <p><b>E-mail:</b> <a href="mailto:ElegantHorloges32@gmail.com" target="_blank">ElegantHorloges32@gmail.com</a></p>
    </section>

    <section class="contact-form">
        <h2>Vul het formulier in</h2>
        <form action="submit_form.php" method="POST">
            <div >
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div >
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div >
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Verzenden</button>
        </form>
    </section>
    
   <!----------------Part---------------------------------->
<?php include "Part.php"; ?>
    <!-------------------------------footer---------------------------------------------->
    <?php include "footer.php"; ?> 
</body>
</html>