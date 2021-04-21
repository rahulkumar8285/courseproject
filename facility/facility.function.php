<?php
require_once("../dbconfig.inc.php");
function FaciltyLogin($email,$password){
  $sql="SELECT  * FROM `facility` WHERE facilityusername= '$email'  AND facilitypassword =  '$password'";
  $result = mysqli_query($GLOBALS['conn'],$sql); 
  $num = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

//   print_r($data);

   if($num==1){
    session_start();
    $_SESSION['fa_username'] = $email;
    $_SESSION['fa_name'] = $data['applicationID'];
    header("Location:http://localhost/collagepro/facility/dhasbord.php");
 }
}