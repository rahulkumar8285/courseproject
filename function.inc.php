<?php
require_once("dbconfig.inc.php");
function ShowData($tabelname){
  $sql = "SELECT * FROM $tabelname";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
}

function SelectData($tabel,$SelectId){
  $sql = "SELECT * FROM `$tabel` WHERE id = '$SelectId'";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;

}

function  AddStudent($data){
    $checkemail = "SELECT  `email`, `mobile` FROM `student`
    WHERE `email` = '$data[1]' OR `mobile` = '$data[2]'";
    $checkresult = mysqli_query($GLOBALS['conn'],$checkemail);
     $num = mysqli_num_rows($checkresult);
    if($num<0){
    $sql = "INSERT INTO `student`( `name`, `email`,`mobile`,`city`,`Country`,`password`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
    $result = mysqli_query($GLOBALS['conn'],$sql);
    
   }
    else{
      return true;
    }
  }

function StudentLogin($email,$password,$path){
  $sql="SELECT * FROM `$path` WHERE email= '$email'  AND password =  '$password'";
  $result = mysqli_query($GLOBALS['conn'],$sql) or die(""); 
  $data = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  echo "<br>".$data;
  echo"<pre>";
  print_r($row);
  echo "</pre>";
 if($data>1){
  session_unset();
  $_SESSION['id'] = $row['id'];
  $_SESSION['email'] = $email;
  $_SESSION['name'] = $row['name'];
  
 }
 else{
   return true;
 }
  } 


// function FaciltyLogin($email,$password){
//   $sql="SELECT  `facilityusername`, `facilitypassword` FROM `facility` WHERE facilityusername= '$email'  AND facilitypassword =  '$password'";
//   $result = mysqli_query($GLOBALS['conn'],$sql); 
//   $data = mysqli_num_rows($result);
//   if($data==1){
//     header('location:http://localhost/collagepro/facility/');
//   }
// }