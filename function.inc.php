<?php

require_once("dbconfig.inc.php");

function ShowDataCourse($tabelname){
  $sql="SELECT * FROM $tabelname WHERE status =1  ORDER BY id DESC";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
}
// $result = ShowDataCourse('course');
// $data = mysqli_fetch_all($result);
// echo"<pre>";
// print_r($data);
// echo"</pre>";


function ShowData($tabelname){
  $sql = "SELECT * FROM $tabelname ORDER BY id DESC";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
}

function StatusCourse($tabel,$fild,$SelectId){
  $sql = "SELECT * FROM `$tabel` WHERE $fild = '$SelectId' AND status =1 ORDER BY id DESC ";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  return $result;
}

function SelectData($tabel,$fild,$SelectId){
  $sql = "SELECT * FROM `$tabel` WHERE $fild = '$SelectId' ORDER BY id DESC ";
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
      $_SESSION['stuname'] = ucwords($data[0]);
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
  $_SESSION['stuname'] = ucwords($row['name']);
   echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/student/index.php';
          </script>");
  

}
 else{
   return true;
}
} 

function FaciltyLogin($email,$password){
  $sql="SELECT  * FROM `facility` WHERE facilityusername= '$email'  AND facilitypassword =  '$password'";
  $result = mysqli_query($GLOBALS['conn'],$sql); 
  $data = mysqli_num_rows($result);
  $check = mysqli_fetch_assoc($result);
  if($data==1){
  session_start();
  echo $_SESSION['faemail'] = $email;
  echo $_SESSION['faid'] = $check['id'];
    echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/facility/';
          </script>");
  }
}

function UpdatePswd($tabel,$email,$password,$id){
  $sql="UPDATE `$tabel` SET `email`='$email',`password`='$password' WHERE `id` =$id";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  if(mysqli_affected_rows($GLOBALS['conn'])==1){
    echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/login.php';
          </script>");
  }

}
