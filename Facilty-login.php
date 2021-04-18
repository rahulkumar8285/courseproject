<?php
include_once("header.php");
include_once("function.inc.php");  
if(isset($_POST['faclogin'])){
   $email =  $_POST['email-id'];
   $pwd = $_POST['password'];
   FaciltyLogin($email,$pwd);
}?>
<section id="basic-horizontal-layouts">
 <div class="container">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        
                                       
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email-id"  class="form-control" name="email-id"
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

                                            <input type="submit" class="btn btn-primary me-1 mb-1" name='faclogin' >Submit</input>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                           
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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