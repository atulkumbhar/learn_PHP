<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have logged out from session';
   header('Refresh: 2; URL = login.php');
?>