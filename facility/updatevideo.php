<?php
include_once("header.php");
require_once('facility.function.php');
$check = false;
if(isset($_SESSION['faid']) || isset($_SESSION['faemail'])){
   $sess = true;
}
if(isset($_GET['cosid'])){
    $result = SelectData('video','id',$_GET['cosid']);
    $data = mysqli_fetch_assoc($result);
   }
if(isset($_POST['addvideo'])){
    $docfile = $_FILES['videofile']['name'];
    $filetmpname=$_FILES['videofile']["tmp_name"];
    $filedir = "../upload/course-video/".$docfile;
    $videonum = mysqli_real_escape_string($GLOBALS['conn'],$_POST['videonum']);
        $videoname = mysqli_real_escape_string($GLOBALS['conn'],$_POST['videoname']);
        $selectcat = mysqli_real_escape_string($GLOBALS['conn'],$_POST['selectcat']);
        $status = mysqli_real_escape_string($GLOBALS['conn'],$_POST['status']);
        $data = [  
         $videonum,$videoname,$selectcat,$docfile,$status,$_SESSION['faid'],$_SESSION['faemail']
        ];
        move_uploaded_file($filetmpname,$filedir);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $check = UpdateVideo($data,$_GET['cosid']);
}
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Forms</h4>
            <?php
            if($check){
         echo '<div class="alert alert-success" role="alert">
         Lecture no '.$videonum.' '.$videoname.' Update successfully  
       </div>';
             }
             
           ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Video Add You Course</div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="videonum">Video S.NO</label>
                                    <input type="number" class="form-control" id="videonum" name="videonum"
                                        value="<?php echo $data['videonum']?>">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="ProjectName">Video Name</label>
                                    <input type="text" class="form-control" id="videoname" name="videoname"
                                        value="<?php echo $data['video']?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Course </label>
                                    <select class="form-control" id="selectcat" name="selectcat">
                                        <?php $result = ShowData("course");
                                         while($row = mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['coursename'];?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Course Details Files</label>
                                    <input type="file" class="form-control-file" id="videofile" name="videofile">
                                    <small><?php echo $data['videopath']; ?></small>
                                </div>
                                <input type="hidden" name="oldimg" value="<?php echo $data['videopath']; ?>">
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Publis Course</label>
                                    <select class="form-control" id="status" name="status">
                                        <?php if($data['status']==0){?>
                                        <option value="0">Draf</option>
                                        <?php }else{?>
                                        <option value="1">Public</option>
                                        <?php }?>
                                        <option value="0">Draf</option>
                                        <option value="1">Public</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Course Catagrey</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="0">Draf</option>
                                        <option value="1">Public</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">Agree with terms and conditions</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <?php if($sess){
                        echo '<button class="btn btn-success" name="addvideo">Submit</button>';
                        }?>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
 require_once("footer.php");
?>