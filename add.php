<?php
    include 'connection.php';
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $Omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];

    $sql = "INSERT INTO `tblproducten` (`id`, `naam`,`omschrijving`, `prijs`,`afbeelding`) VALUES ( '$id', '$naam','$Omschrijving', '$prijs',  '$afbeelding')";


    if ($conn->query($sql) === TRUE){
        header("Location: addPage.php?melding=Record toegevoegd");
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>