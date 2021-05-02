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
     '$Course[coursedetailsfile]','$Course[status]')";
      mysqli_query($GLOBALS['conn'],$sql) or die("Error query Not run ".mysqli_error());
        if(mysqli_affected_rows($GLOBALS['conn'])==1){
          echo ("<script LANGUAGE='JavaScript'>
          window.location.href='http://localhost/collagepro/facility/totalcourse.php';
         </script>");
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

function CatName($tabel,$SelectId){
$sql = "SELECT * FROM `$tabel` WHERE `id` =  $SelectId";
$result = mysqli_query($GLOBALS['conn'],$sql);
$num = mysqli_fetch_all($result);
return $num[0][1];
}
// $result = SelectData('course','id',8);
// $data = mysqli_fetch_assoc($result);
//  print_r($data);
function UpdateCourse($Course,$id){
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
function DeleteAll($id){
   echo $sql="DELETE FROM `course` WHERE `course`.`id` = $id";
   $result = mysqli_query($GLOBALS['conn'],$sql);
   header("refresh:");
}

// function DeIncrment($tabel,$id){
//   $sql = "UPDATE `$tabel` SET `totalvideo`=`totalvideo`-1 WHERE `id`=$id";
//   $result = mysqli_query($GLOBALS['conn'],$sql);
//   if(mysqli_affected_rows($GLOBALS['conn'])==1){
//     return true;
//   }
// }

// DeIncrment('course',$id);

function DeleteId($tabel,$id,$cd){
  $sql = "DELETE FROM `$tabel` WHERE id=$id";
  mysqli_multi_query($GLOBALS['conn'],$sql); 
  if(mysqli_affected_rows($GLOBALS['conn'])==1){
    $sql = "UPDATE `course` SET `totalvideo`=`totalvideo`-1 WHERE `id`=$cd";
    $result = mysqli_query($GLOBALS['conn'],$sql);
    if(mysqli_affected_rows($GLOBALS['conn'])==1){
      return true;
    }
    } 
}



function UpdateCount($tabel,$id){
  $sql = "UPDATE  `$tabel` SET  totalvideo = totalvideo +1 WHERE id = '$id'";
  $result = mysqli_query($GLOBALS['conn'],$sql);
  if(mysqli_affected_rows($GLOBALS['conn'])==1){
    return true;
  }
}


function AddVideo($data){
  $sql="INSERT INTO `video`( `videonum`, `video`, `coursename`, `videopath`,`status`,`facilityid`,`facilityemail`,`auth`) 
  VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
  if(mysqli_multi_query($GLOBALS['conn'],$sql) or die("Error query Not run ".mysqli_error())){
    return UpdateCount('course',$data[2]);
  } 
  else{
    return false;
  }
}

function UpdateVideo($data,$id){
   $sql=" UPDATE `video` SET `videonum`='$data[0]',`video`='$data[1]',
   `coursename`='$data[2]',`videopath`='$data[3]',`status`='$data[4]'
   WHERE 'id'= '$id' ";
   $result = mysqli_query($GLOBALS['conn'],$sql);
   if(mysqli_affected_rows($GLOBALS['conn'])==1){
     return true;
   }
}

?>