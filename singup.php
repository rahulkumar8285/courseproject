<?php
  require_once("header.php");
  require_once("function.inc.php");
 $result=false;
  if(isset($_POST['addstudent'])){
  $full_name = $_POST['full-name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $password = $_POST['password'];
  $data=[$full_name,$email,$mobile,$city,$country,$password];
  $result = AddStudent($data); 
}
?>
<div class="container pt-5 py-5 ">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Singup Form</h4>
                    </div>
                    <!------errror---msg-->
                    <div id="errormsg">

                    </div>
                    <?php
                    if($result){
                    echo '<div class="alert alert-warning" role="alert">
                      You Email and Mobile Number Already Rigester :-<a href="login.php"> Click To Login</a>
                    </div>';
                    }
                    ?>


                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return validateForm(this)"  method="POST" >
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Full  Name</label>
                                            <input type="text" id="full-name"  class="form-control"
                                                placeholder="Full Name" name="full-name" maxlength="30" > 
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                name="email" placeholder="Email">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mobile-id-column">Mobile Number</label>
                                            <input type="number" id="mobile" class="form-control"
                                                name="mobile" placeholder="mobile number">
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">City</label>
                                            <input type="text" id="city" class="form-control" placeholder="City"
                                                name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Country</label>
                                            <input type="text" id="country" class="form-control"
                                                name="country" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password-column">Password</label>
                                            <input type="password" id="password" class="form-control"
                                                name="password" placeholder="password">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                <label for="checkbox5">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="addstudent">Submit</button>
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