<?php
session_start();
session_destroy();
session_unset();
header("Location: Login1.php?melding= Je bent afgelogd");

?>