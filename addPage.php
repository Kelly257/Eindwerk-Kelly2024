<?php 
    if(isset($_GET['melding'])){
        $melding=$_GET['melding'];
       ?><script>alert ("<?php print $melding;?>")</script> 
       <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten toevoegen</title>
    <!-- CSS code -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">    
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
        <li><a href="demo login/login.php"><i class="fas fa-user"></i> Inloggen</a></li>
        <li><a href="winkelmandje.html"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    
</nav>

    
<!-- <div class="container">
    <br><br><br>
    <h2>Product toevoegen</h2>
    <div class="add">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <table >
             
                <tr>
                    <td>Naam:  </td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td>Omschrijving: </td>
                    <td><input type="text" name="omschrijving" id="omschrijving"></td>
                </tr>
                <tr>
                    <td>Prijs: </td>
                    <td><input type="number" name="prijs" id="prijs"> EUR</td>
                </tr>
                <td>Afbeelding: </td>
                <td><input type="text" name="afbeelding" id="afbeelding"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Toevoegen"></td>
                </tr>
               
            </table>
        </form>
    </div> -->

<!-- Form toevoegen -->
    <section class="contact-form"> <!---de naam contact-form dat is gewoon dat ik wil geen apart css doen-->

        <h2>Product Toevoegen</h2>
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div >
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="omschrijving">omschrijving: </label>
                <input type="text" name="omschrijving" id="omschrijving" required >
            </div>
            <div>
                <label for="prijs">Prijs(€): </label>
                <input type="number" name="prijs" id="prijs" required>

            </div>

            <div>
                <label for="afbeelding">Afbeelding:</label>
                <input type="text" name="afbeelding" id="afbeelding" required>
            </div>
           
            <button type="submit" value="Toevoegen">Toevoegen</button>
        </form>
    </section>

    <!-- ddhh -->
    <div class="product">
    <h2>Producten toegevoegd</h2>
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM `tblproducten`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                ?>
           <div class="artikel">
               <img src="image/<?php echo $row['afbeelding'];?>" class="artikel-image" >
               <p><?php echo $row['id']; ?></p>
               <h3 <?php echo $row['naam']; ?>></h3>
               <p class="beschrijving" <?php echo $row['omschrijving']; ?>> </p>
               <p class="beschrijving" <?php echo $row['prijs']; ?>> </p>
              
               <button class="btn Toevoegen" id="del" onclick="location.href='del.php?id=<?php echo $row['id']?>'">DELETE</button>
               <?php
                    };
                    $conn->close();
                ?>
           </div>
</div>
    <!-- cdbd -->
    
    
   

        <!-- Partenaires -->
</div>
    <div class="Part">
        <h2>Partenaires</h2>
        <div class="partners-container">
            <div class="Part-link">
                <a href="https://www.rolex.com/nl" target="_blank">
                    <img class="Part-item" src="Image/Rolex-logo.jpg" alt="Partner 1">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://www.cartier.com/nl-be/" target="_blank">
                    <img class="Part-item" src="Image/Cartier-logo.jpg" alt="Partner 2">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://www.omegawatches.com/" target="_blank">
                    <img class="Part-item" src="Image/Omega-logo.jpg" alt="Partner 3">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://www.tagheuer.com/be/en/" target="_blank">
                    <img class="Part-item" src="Image/Tag-heur-logo.jpg" alt="Partner 4">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://jacobandco.com/" target="_blank">
                    <img class="Part-item" src="Image/Jacob&co-logo.jpg" alt="Partner 2">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://festina.com/nl-BE" target="_blank">
                    <img class="Part-item" src="Image/brand-logo-festina.jpg" alt="Partner 2">
                </a>
            </div>
            <div class="Part-link">
                <a href="https://brusselsfashionweek.com/" target="_blank">
                    <img class="Part-item" src="Image/Brussel.jpg" alt="Partner 2">
                </a>
            </div>
    
    
    </div>
     <!-------------------------------footer---------------------------------------------->
     <footer>
        <div class="container">
            <div class="rij">
                  <div class="kol">
                      <img src="Image/Logo.jpg" alt="" class="logo">
                      <p>
                        Breng uw stijl tot leven met onze verfijnde selectie van Elegant Holorges - 
                        Kwaliteit en klasse voor elke gelegenheid.
                      </p>
                      <div class="sociaal">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fab fa-twitter"></i></a>
                    
                        
    
                      </div>
                  </div>
    
    
                  <div class="kol">
                     <h3>Quick-links</h3>
                     <div class="links">
                        <a href="home.html">Home</a>
                        <a href="Over-ons.html">Over-ons</a>
                        <a href="Catalogus.html">Catalogus</a>
                        <a href="Contact.html">Contact</a>
                     </div>
                  </div>
    
                  <div class="kol" >
                     <h3>Merken</h3>
                     <div class="links">
                        <a href="Rolex.php">Rolex</a>
                        <a href="Omega.php">Omega</a>
                        <a href="Cartier.php">Cartier</a>
                        <a href="Jacob&Co.php">Jacob&Co</a>
                        <a href="Festina.php">Festina</a>
                     </div>
                  </div>
    
                  <div class="kol" >
                      <h3>Contact</h3>
                      <div class="links" id="Contact">
                         <a href="#"><i class="fa fa-location"> </i>Grote-Markt 01, 8500 KORTRIJK</a>
                         <a href="tel:+32045467"><i class="fa fa-phone"> </i>+3204546587</a>
                         <a href="mailto:ElegantHorloges32@gmail.com"> <i class="fa far fa-envelope"></i>ElegantHorloges32@gmail.com</a>
                      </div>
                    
                  </div>
            </div>
    
          
        </div>
     </footer>
</body>
</html>