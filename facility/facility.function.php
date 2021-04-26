<?php require_once('../dbconfig.inc.php');
  require_once('../function.inc.php');
  function AddCourse($Course){
    $sql ="INSERT INTO `course` (`coursename`, `discretion`, `publisdate`,
    `price`, `councatg`, `authorid`, `authorname`, `project`, `imgpath`,
    `sellprice`, `shotdescription`, `coupencode`, `file`,`status`)
     VALUES ('$Course[coursename]','$Course[LongDiscretion]','$Course[date]',
     '$Course[SellPrice]','$Course[selectcat]','$Course[authoid]',
     '$Course[authoname]','$Course[ProjectName]','$Course[Thumbnailimage]',
     '$Course[purchaserprice]','$Course[ShortDiscretion]','$Course[CoupenCode]',
     '$Course[coursedetailsfile]','$Course[status]') ";
      if(mysqli_query($GLOBALS['conn'],$sql) or die("Error query Not run ".mysqli_error())){
        return true;
      } 
      else{
        return false;
      }
   
}

function TotalNum($tabel,$fild,$SelectId){
  $sql = "SELECT * FROM `$tabel` WHERE $fild = '$SelectId'";
  $result = mysqli_query($GLOBALS['conn'],$sql);
 $num = mysqli_num_rows($result);
 return $num; 
}

function CatName($SelectId){
$sql = "SELECT * FROM `coursecat` WHERE `id` = '$SelectId'";
$result = mysqli_query($GLOBALS['conn'],$sql);
$num = mysqli_fetch_assoc($result);
return $num['catname'];
}
// $result = SelectData('course','id',8);
// $data = mysqli_fetch_assoc($result);
//  print_r($data);
function UpdateCourse($Course,$id){
//   $sql="UPDATE `course` SET coursename=$Course[coursename],discretion=$Course[LongDiscretion],
//  price=$Course[SellPrice],councatg=$Course[selectcat],
//  project=$Course[ProjectName],imgpath=$Course[Thumbnailimage],
//  `sellprice`='$Course[purchaserprice]',`shotdescription`='$Course[ShortDiscretion]',
//  `coupencode`='$Course[CoupenCode]',`file`='$Course[coursedetailsfile]',`status`='$Course[status]' WHERE $id";
// print_r($Course);
$sql="UPDATE course SET `coursename`='$Course[coursename]',`project`='$Course[project]',
`discretion`='$Course[LongDiscretion]',`price`='$Course[SellPrice]',
`councatg`='$Course[selectcat]',`imgpath`='$Course[Thumbnailimage]',
`sellprice`='$Course[purchaserprice]',`shotdescription`='$Course[ShortDiscretion]',
`coupencode`='$Course[CoupenCode]',`file`='$Course[coursedetailsfile]',
`status`='$Course[status]'WHERE `id`=$id";
$result = mysqli_query($GLOBALS['conn'],$sql);
   if(mysqli_affected_rows($GLOBALS['conn'])==1){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/collagepro/facility/totalcourse.php';
   </script>");
   }
   else{
    return true;
   }
}

function DeleteId($tabel,$id){
  $sql = "DELETE FROM `$tabel` WHERE id=$id";
  $result = mysqli_query($GLOBALS['conn'],$sql);
   if(mysqli_affected_rows($GLOBALS['conn'])==1){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/collagepro/facility/totalcourse.php';
   </script>");
   }
}


?>

