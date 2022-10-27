<?php
//destroy session?
session_start();
unset($_SESSION['usename']);
// redirect another page?
/* Redirect browser */
header("Location: login_first.html"); 
exit();




?>
