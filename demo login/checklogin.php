
    <!-------------------------- php -------------------------------->
  <?php 
include_once ("connection.php");
$result=0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);

// SpassedS-md5(Spass) ;

$result = $conn -> query ("SELECT * FROM users WHERE gebruikersnaam='$user' AND paswoord='$pass'");

if ($result -> num_rows) {
  print "welkom";
  session_start();
  $_SESSION["user"] = $user;
  header ("Location: login.php?melding= Je bent aangemeld");
}
else {
  header ("Location: login.php?melding=Gebruikersnaam of paswoord is niet correct");
}
$conn->close();
?> 






  


