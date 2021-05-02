<?php
  require_once("header.php");
  require_once("function.inc.php");
  $result=false;
//   if(isset($_SERVER['HTTP_REFERER'])){
//   echo $backpage = $_SERVER['HTTP_REFERER'];
//   }
//   if(isset($_GET["cid"])){
//   $_SESSION["cid"] = $_GET['cid'];} 

  if(isset($_POST['addfacility'])){
    $imgname = $_FILES['img']['name'];
    $imgtmpname=$_FILES['img']["tmp_name"];
    $filename = $_FILES['biodata']['name'];
    $filetmpname=$_FILES['biodata']["tmp_name"];
    $dir = './upload/facility/'.$imgname;
    $filedir = './upload/facility/'.$filename;
    if(move_uploaded_file($imgtmpname,$dir)){
        if( move_uploaded_file($filetmpname,$filedir)){
  $full_name = mysqli_real_escape_string($GLOBALS['conn'],$_POST['full-name']);
  $email = mysqli_real_escape_string($GLOBALS['conn'],$_POST['email']);
  $mobile = mysqli_real_escape_string($GLOBALS['conn'], $_POST['mobile']);
  $password = mysqli_real_escape_string($GLOBALS['conn'],md5($_POST['password']));
  $data=[$full_name,$email,$mobile,$password,$imgname,$filename];
//   echo "<pre>";
//    print_r($data);
//   echo "</pre>"; 
   $result = AddFacility($data); 
    }
    else{
        echo'
        <div class="alert alert-danger" role="alert">
        you File Formate not Match only upload img jpg,png and jpeg and file doc,pdf!
        </div> ';  
    }

}
 
}
// echo $_SERVER['HTTP_REFERER'];
?>
<div class="container pt-5 py-5 ">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Singup Form</h4>
                </div>
                <!------errror---msg-->
                <?php
                    if($result){
                    echo '
                    <a href="Facilty-login.php" class="text-light" >
                    <div class="alert alert-danger" role="alert">
                      You Email And Mobile Number Already Rigester
                      Click To Login
                    </div> </a>';
                    }
                    ?>


                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>"
                           method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Full Name</label>
                                        <input type="text" id="full-name" class="form-control" placeholder="Full Name"
                                            name="full-name" maxlength="30" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Email</label>
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="Email" required>
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="mobile-id-column">Mobile Number</label>
                                        <input type="number" id="mobile" class="form-control" name="mobile"
                                            placeholder="mobile number" required>
                                    </div>

                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password-column">Password</label>
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Upload Profile Image</label>
                                        <input type="file" id="img" class="form-control" name="img" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Bio-Data</label>
                                        <input type="file" id="biodata" class="form-control" name="biodata" required>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" required id="checkbox5" class='form-check-input'
                                                checked>
                                            <label for="checkbox5">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1"
                                        name="addfacility">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php");                       