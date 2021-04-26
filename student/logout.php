<?php 
session_start();
echo $_SESSION['name'];
echo $_SESSION['email'];
echo $_SESSION['faemail'];
echo $_SESSION['faid'];
session_unset();
?>