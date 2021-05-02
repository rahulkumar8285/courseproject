<?php
 include_once("header.php");
 require_once('facility.function.php');
if(isset($_GET['cosid'])){
 $result = SelectData('course','id',$_GET['cosid']);
 $num = mysqli_fetch_array($result);
}
 
 if(isset($_SESSION['faid']) || isset($_SESSION['faemail'])){
    $sess = true;
 }
$result = false;
if(isset($_POST['update'])){
    $cousename = $_POST['coursename'];
    $ProjectName = $_POST['ProjectName'];
    $SellPrice = $_POST['SellPrice'];
    $purchaserprice = $_POST['purchaserprice'];
    $CoupenCode = $_POST['CoupenCode'];
    $selectcat = $_POST['selectcat'];
    $ShortDiscretion = $_POST['ShortDiscretion'];
    $LongDiscretion = $_POST['LongDiscretion'];
    $Thumbnailimage = $_POST['Thumbnailimage'];
    $coursedetailsfile = $_POST['coursedetailsfile'];
    $status = $_POST['status'];
    $Course = [
        'coursename' => $cousename,'ProjectName' => $ProjectName,'SellPrice' => $SellPrice,
        'purchaserprice' => $purchaserprice,
        'CoupenCode' => $CoupenCode,'selectcat' => $selectcat,'ShortDiscretion' => $ShortDiscretion,
        'LongDiscretion' => $LongDiscretion,'Thumbnailimage' => $Thumbnailimage,
        'coursedetailsfile' => $coursedetailsfile,'status'=>$status    
    ];
    // echo "<pre>";
    //  print_r($Course);
    // echo "</pre>";
     $return = UpdateCourse($Course,$_GET['cosid']);
    
}
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Update Your Course Data</h4>
            <?php
            if($result){
                echo '<div class="alert alert-success" role="alert">
               You Data Not Update An Non Error!
              </div>';
             }
             
           ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return AddData(this)">
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
                                        value="<?php echo $num['coursename']  ?>">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Enter Couser Name To Search High.
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ProjectName">Deploye Project Name</label>
                                    <input type="text" class="form-control" id="ProjectName" name="ProjectName"
                                        value="<?php echo $num['project']  ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="SellPrice">Sell Price</label>
                                    <input type="number" class="form-control" name="SellPrice" id="SellPrice"
                                        value="<?php echo $num['price']  ?>">
                                    <small id="emailHelp" class="form-text text-muted">This is High Price To Show The
                                        Student</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="purchaserprice">Purchaser Price</label>
                                    <input type="number" class="form-control" id="purchaserprice" name="purchaserprice"
                                        value="<?php echo $num['sellprice']  ?>">
                                    <small id="emailHelp" class="form-text text-muted">This Price Student Buy You
                                        Course</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CoupenCode">Enter The Coupen Code</label>
                                    <input type="text" class="form-control" name="CoupenCode" id="CoupenCode"
                                        value="<?php echo $num['coupencode']  ?>">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Course Catagrey</label>
                                    <select class="form-control" id="selectcat" name="selectcat">
                                        <?php $coucat = CatName('coursecat',$num['councatg']) ;?>
                                        <option value="<?php echo $num['councatg'] ?>"><?php echo $coucat;?></option>
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
                                    <textarea class="form-control" id="ShortDiscretion" name="ShortDiscretion" rows="3"><?php echo $num['shotdescription'] ?>
									</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="LongDiscretion">Long Discretion</label>
                                    <textarea class="form-control" id="LongDiscretion" name="LongDiscretion" rows="8">
                                    <?php echo $num['discretion'];?>
									</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Publis Course</label>
                                    <select class="form-control" id="status" name="status">
                                        <?php if($num['status']==0){?>
                                        <option value="0">Draf</option>
                                        <?php }else{?>
                                        <option value="1">Public</option>
                                        <?php }?>
                                        <option value="0">Draf</option>
                                        <option value="1">Public</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1"> Course Thumbnail Image</label>
                                    <input type="file" class="form-control-file" id="Thumbnailimage"
                                        name="Thumbnailimage" value="" accept="amrit.txt">
                                    <small class="text-danger" id='error'></small>
                                    <h6 class="text-sucsse"><?php echo $num['imgpath'] ?></h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Course Details Files</label>
                                    <input type="file" class="form-control-file" id="coursedetailsfile"
                                        name="coursedetailsfile" value="">
                                    <small class="text-danger" id="errorfile"></small>
                                    <h6 class="text-sucsse"><?php echo $num['file'] ?></h6>
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
                        echo '<button class="btn btn-success" name="update">Submit</button>';
                        }?>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>