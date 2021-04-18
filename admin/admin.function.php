<?php
 require_once("../dbconfig.inc.php");
 function ShowData($coursecat){
  $sql  = "SELECT * FROM $coursecat ORDER BY catname ASC ;" ;
  $result = mysqli_query($GLOBALS['conn'],$sql) or die("query not run and :- ".mysqli_error());
  return $result;
}
function AddData($newcat,$tabelname){
  $sql  = "INSERT INTO `coursecat`( `catname`) VALUES ('$newcat')" ;
  $result = mysqli_query($GLOBALS['conn'],$sql) or die("query not run and :- ".mysqli_error());
}
?>