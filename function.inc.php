<?php

require_once("dbconfig.inc.php");
function ShowData($tabelname){
  $sql = "SELECT * FROM $tabelname";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
}

function SelectData($tabel,$fild,$SelectId){
  $sql = "SELECT * FROM `$tabel` WHERE $fild = '$SelectId'";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
  

}

function  AddStudent($data){
    $checkemail = "SELECT  `email`, `mobile` FROM `student`
    WHERE `email` = '$data[1]' OR `mobile` = '$data[2]'";
    $checkresult = mysqli_query($GLOBALS['conn'],$checkemail);
    $num = mysqli_num_rows($checkresult);
    if($num<=0){
    $sql = "INSERT INTO `student`( `name`, `email`,`mobile`,`city`,`Country`,`password`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
    $result = mysqli_query($GLOBALS['conn'],$sql);
    if($result){
      // session_start();
      // $_SESSION['id'] = $row['id'];
      $_SESSION['stuemail'] = $data[1];
      $_SESSION['stuname'] = $data[0];
      echo ("<script LANGUAGE='JavaScript'>
      window.location.href='http://localhost/collagepro/courses.php';
     </script>");
  }

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
 if($data==1){
  // session_start();
  // $_SESSION['id'] = $row['id'];
  $_SESSION['stuemail'] = $email;
  $_SESSION['stuname'] = $row['name'];
   echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/student/index.php';
          </script>");
  

}
 else{
   return true;
}
} 

