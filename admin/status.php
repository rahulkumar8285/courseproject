<?php
require_once("admin.function.php");
$id = $_GET['id'];
$result = SelectData('facility','id',$id);
$data = mysqli_fetch_assoc($result);


if($data['status']){
 $sql = "UPDATE `facility` SET `status`='0' WHERE `id`='$id' ";
}
else{
$sql = "UPDATE `facility` SET `status`='1' WHERE `id`='$id' ";
}
 mysqli_query($GLOBALS['conn'],$sql);
 echo ("<script LANGUAGE='JavaScript'>
           window.location.href='http://localhost/collagepro/admin/facilityreq.php';
          </script>");  
?>