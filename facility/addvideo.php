<?php
include_once("header.php");
require_once('facility.function.php');
$result = false;
if(isset($_SESSION['faid']) || isset($_SESSION['faemail'])){
   $sess = true;
}
if(isset($_POST['addvideo'])){
    $docfile = $_FILES['videofile']['name'];
    $filetmpname=$_FILES['videofile']["tmp_name"];
    $filedir = "../upload/course-video/".$docfile;
    if(move_uploaded_file($filetmpname,$filedir)){
        $videonum = mysqli_real_escape_string($GLOBALS['conn'],$_POST['videonum']);
        $videoname = mysqli_real_escape_string($GLOBALS['conn'],$_POST['videoname']);
        $selectcat = mysqli_real_escape_string($GLOBALS['conn'],$_POST['selectcat']);
        $status = mysqli_real_escape_string($GLOBALS['conn'],$_POST['status']);
        $auth = mysqli_real_escape_string($GLOBALS['conn'],$_POST['auth']);
        $data = [  
            $videonum,$videoname,$selectcat,$docfile,$status,$_SESSION['faid'],$_SESSION['faemail'],$auth
    ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
         $result = AddVideo($data);
    
    }
}
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Forms</h4>
            <?php
            if($result){
         echo '<div class="alert alert-success" role="alert">
         Lecture no '.$videonum.' '.$videoname.' Add successfully  
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
                                    <input type="number" class="form-control" id="videonum" name="videonum">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="ProjectName">Video Name</label>
                                    <input type="text" class="form-control" id="videoname" name="videoname"
                                        placeholder="Enter Video Name">
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
                                    <small class="text-danger" id="errorfile"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Video Details </label>
                                    <select class="form-control" id="auth" name="auth">
                                        <option value="0">Paid</option>
                                        <option value="1">Free</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Publics</label>
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