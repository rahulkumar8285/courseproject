<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collagepro";

// Create connection
$GLOBALS['conn'] = mysqli_connect($servername, $username, $password ,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "data connection";
}

