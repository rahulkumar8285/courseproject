<?php 
session_start();
echo $_SESSION['name'];
echo $_SESSION['email'];
session_unset();
?>