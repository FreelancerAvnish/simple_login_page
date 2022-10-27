
<?php
session_start();
if(!isset($_SESSION['usename']))
{
    header("Location: login_first.html"); 
  
}
//put value in session variable?
?>
