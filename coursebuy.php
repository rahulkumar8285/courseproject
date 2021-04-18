<?php
  session_start(); 
  $_SESSION['username'] = "rahul";
  $_SESSION['email'] = "rahulkumkar@4155";
  session_unset();
 session_destroy();
  if($_SESSION['username'] && $_SESSION['email']){}
  else{ header("Location:singup.php");
  }
  require_once("header.php");
  require_once("footer.php");