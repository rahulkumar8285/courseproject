<?php
include_once("header.php");
include_once("function.inc.php");  
$result = false;
if(isset($_SESSION["faemail"]) || isset($_SESSION["faid"])){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/collagepro/facility/';
   </script>");
}
if(isset($_POST['faclogin'])){
    echo  $email =  $_POST['email-id'];
    echo $pwd = md5($_POST['password']);   
    $result = FaciltyLogin($email,$pwd);
}?> 
<section id="basic-horizontal-layouts">
 <div class="container pt-5 py-5">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Facility Form</h4>
                    </div>
                    <div class="card-content">
                    <?php
                     if($result){
                         echo '
                         <div class="alert alert-danger" role="alert">
                         You Email And Password Not Match!
                       </div>
                         ';

                     }
                    ?>
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        
                                       
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email"  class="form-control" name="email-id"
                                                placeholder="Email">
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Password">
                                        </div>
                                        
                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1" class='form-check-input'
                                                        checked>
                                                    <label for="checkbox1">Remember Me</label>
                                                </div>
                                            </div>

                                            <input type="submit" class="btn btn-primary me-1 mb-1" name='faclogin' ></input>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                           
                                            <a href="forgetpsd.php" type="reset"class="btn btn-light-secondary me-1 mb-1">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </section>
<?php
include_once("footer.php");