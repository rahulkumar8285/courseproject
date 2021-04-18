<?php
     session_start();
     echo $_SESSION['email'];
     echo $_SESSION['name'];
    session_unset();     
?>