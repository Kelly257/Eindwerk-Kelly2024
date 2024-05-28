<?php
include_once("connection1.php");
$result=0;
$user= $_POST['username'];
$pass1= $_POST['password1'];
$pass2= $_POST['password2'];

if ($pass1!=$pass2)// Zijn de wachtwoorden gelijk
{
    $melding= "Beide wachtwoorden zijn niet identiek";
    header("Location: signupForm1.php?melding=$melding");

}

else //Bestaat de user al
{
    $result = $conn -> query("SELECT * FROM users WHERE gebruikersnaam='$user' " );

    if($result->num_rows==0)
    {
        $sql = "INSERT INTO users (gebruikersnaam, paswoord) VALUES ('$user','$pass1')";

        if ($conn ->query($sql)=== TRUE ){
            $melding="Account is toegevoegd";
            session_start();
            $_SESSION["user"]==$user;

        }
        else{
            $melding="Error: ". $sql . "<br>" . $conn->error;

        }
    }
    else{
        $melding= "De gebruikersnaam bestaat al";

    }
    header("Location: signupForm.php1?melding=$melding");
    $conn->close();
}