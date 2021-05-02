<?php
 require_once("../dbconfig.inc.php");
 require_once("../function.inc.php");
 require_once("../facility/facility.function.php");
 

function AddData($newcat,$tabelname){
  $sql  = "INSERT INTO `coursecat`( `catname`) VALUES ('$newcat')" ;
  $result = mysqli_query($GLOBALS['conn'],$sql) or die("query not run and :- ".mysqli_error());
}
function DeleteSub($tabelname,$id){
  $sql = "DELETE FROM `$tabelname` WHERE id=$id";
  if(mysqli_multi_query($GLOBALS['conn'],$sql)>0){
   return true;
  }
}

function AdminLogin($email,$password){
  $sql="SELECT * FROM `admin` WHERE `email`= '$email'  AND `password` =  '$password'";
  $result = mysqli_query($GLOBALS['conn'],$sql) or die(""); 
  $data = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
 if($data==1){
  session_start();
 $_SESSION['aemial'] = $email;
 $_SESSION['aid'] = $row['id'];
   echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/admin/dhasbord.php';
          </script>");
        }
 else{
   return true;
}
} ?>
