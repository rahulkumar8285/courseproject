<?php
 include_once("header.php");
 require_once('facility.function.php');
 $sess = false;
 if(isset($_SESSION['faid']) || isset($_SESSION['faemail'])){
    $sess = true;
 }
$result = false;
if(isset($_POST['adddata'])){
    // print_r($_FILES['Thumbnailimage']);
    $imgname = $_FILES['Thumbnailimage']['name'];
    $tmpname=$_FILES['Thumbnailimage']["tmp_name"]; 
    $imgdir = "../upload/course/".$imgname;
    // img--file--send
    $docfile = $_FILES['coursedetailsfile']['name'];
    $filetmpname=$_FILES['coursedetailsfile']["tmp_name"];
    $filedir = "../upload/course/".$docfile;
    if(move_uploaded_file($tmpname,$imgdir)){
        if(move_uploaded_file($filetmpname,$filedir)){
        $cousename = $_POST['coursename'];
        $ProjectName = $_POST['ProjectName'];
        $SellPrice = $_POST['SellPrice'];
        $purchaserprice = $_POST['purchaserprice'];
        $CoupenCode = $_POST['CoupenCode'];
        $selectcat = $_POST['selectcat'];
        $ShortDiscretion = $_POST['ShortDiscretion'];
        $LongDiscretion = $_POST['LongDiscretion'];
        $Thumbnailimage = $imgname;
        $coursedetailsfile = $docfile;
        $authoid = $_SESSION['faid'];
        $status = $_POST['status'];
        $result = SelectData("facility",'id',$authoid);
        $data = mysqli_fetch_assoc($result);
        $Course = [
            'coursename' => $cousename,'ProjectName' => $ProjectName,'SellPrice' => $SellPrice,
            'purchaserprice' => $purchaserprice,
            'CoupenCode' => $CoupenCode,'selectcat' => $selectcat,'ShortDiscretion' => $ShortDiscretion,
            'LongDiscretion' => $LongDiscretion,'Thumbnailimage' => $Thumbnailimage,
            'coursedetailsfile' => $coursedetailsfile,'date'=>date('j-M-Y'),'authoid'=>$authoid,
            'authoname' => $data['name'],'status'=>$status
        ];
    //      echo "<pre>";
    //   print_r($Course); 
    //  echo "</pre>";

         $return =  AddCourse($Course);
    }
}
    else{
     echo '<div class="alert alert-danger" role="alert">
        You File Not Match 
      </div>';   
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
                You Course Seccesfull add.
              </div>';
             }
           ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST" onsubmit="return AddData(this)" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Base Form Control</div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coursename">Course Name</label>
                                    <input type="text" class="form-control" id="coursename" name="coursename"
                                        placeholder="Enter Course Name">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Enter Couser Name To Search High.
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ProjectName">Deploye Project Name</label>
                                    <input type="text" class="form-control" id="ProjectName" name="ProjectName"
                                        placeholder="Enter Deploye Project Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="SellPrice">Sell Price</label>
                                    <input type="number" class="form-control" name="SellPrice" id="SellPrice"
                                        placeholder="Enter Course Selling Price">
                                    <small id="emailHelp" class="form-text text-muted">This is High Price To Show The
                                        Student</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="purchaserprice">Purchaser Price</label>
                                    <input type="number" class="form-control" id="purchaserprice" name="purchaserprice"
                                        placeholder="Purchaser Price">
                                    <small id="emailHelp" class="form-text text-muted">This Price Student Buy You
                                        Course</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CoupenCode">Enter The Coupen Code</label>
                                    <input type="text" class="form-control" name="CoupenCode" id="CoupenCode"
                                        placeholder="Enter The Coupen Code">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Course Catagrey</label>
                                    <select class="form-control" id="selectcat" name="selectcat">
                                        <?php $result = ShowData("coursecat");
                                             while($row = mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['catname'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ShortDiscretion">Short Discretion</label>
                                    <textarea class="form-control" id="ShortDiscretion" name="ShortDiscretion" rows="3">
									</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="LongDiscretion">Long Discretion</label>
                                    <textarea class="form-control" id="LongDiscretion" name="LongDiscretion" rows="8">
									</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1"> Course Thumbnail Image</label>
                                    <input type="file" class="form-control-file" id="Thumbnailimage"
                                        name="Thumbnailimage">
                                    <small class="text-danger" id='error'></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Course Details Files</label>
                                    <input type="file" class="form-control-file" id="coursedetailsfile"
                                        name="coursedetailsfile">
                                    <small class="text-danger" id="errorfile"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                        echo '<button class="btn btn-success" name="adddata">Submit</button>';
                        }?>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>