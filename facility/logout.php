<?php
  
  session_start();
  echo $_SESSION['faemail'];
  echo $_SESSION['faid'];
  session_unset();
  header("Location:http://localhost/collagepro/")
    
?>