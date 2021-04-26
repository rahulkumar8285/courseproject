<?php require_once("header.php");
      require_once("function.inc.php");
      $result = false;
  if(isset($_POST['StudentLogin'])){
      echo $email = $_POST['email'];
      echo $password = $_POST['password'];
      $result = StudentLogin($email,$password,"student");
    }
?>
<section id="categories-area ">
    <div class="container pt-5 py-5">
        <div class="row match-height justify-content-center ">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Student Login Form</h4>
                    </div>
                    <div id="errormsg">

                    </div>
                    <?php
                    if($result){
                    echo '<div class="alert alert-danger" role="alert">
                      User Name And Password Not Match 
                       </div>';
                    }
                    ?>
                    <div class="card-content">
                        <div class="card-body py-4">
                            <form class="form form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>"
                                onsubmit="return login(this)" method="POST">
                                <div class="form-body">
                                    <div class="row">


                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email" class="form-control" name="email"
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
                                            <input type="submit" class="btn btn-primary me-1 mb-1"
                                                name='StudentLogin'></input>
                                        </div>
                                        <!-- <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Forget Password</button>
                                             </div> -->
                                    </div>
                                </div>
                            </form>
                                <a class="btn btn-outline float-right " href="forgetpsd.php">
                                     Forget Password
                                </a>
                                

                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once("footer.php");