
    <!-------------------------- php -------------------------------->
    <?php 
include_once ("connection1.php");
$result=0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);

// SpassedS-md5(Spass) ;

$result = $conn -> query ("SELECT * FROM users WHERE gebruikersnaam='$user' AND paswoord='$pass'");

if ($result -> num_rows) {
  print "welkom";
  session_start();
  $_SESSION["user"] = $user;
  header ("Location: Login1.php?melding= Je bent aangemeld");
}
else {
  header ("Location: Login1.php?melding=Gebruikersnaam of paswoord is niet correct");
}
$conn->close();
?> 






  


