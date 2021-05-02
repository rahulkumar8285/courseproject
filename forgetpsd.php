<?php
 include_once('header.php');
 $file = false;
 if(isset($_POST['fpswd'])){
    $result = SelectData('student','email',$_POST['email']);
    $data = mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if($num ==1){$file=true;}
    echo"this is forget btn";
 }
 
//   $url = $_SERVER['HTTP_REFERER'];
//   $file_name = basename(parse_url($url, PHP_URL_PATH));
//   echo $file_name;
//   if($file_name = "login.php")
//   {
//       echo"string match";
//   }


 if(isset($_POST['submit'])){
     echo $_POST['email'];
     echo $_POST['password'];
     echo $_POST['id'];
    
     UpdatePswd('student',$_POST['email'],$_POST['password'],$_POST['id']);
 }
?>
 <section id="categories-area ">
    <div class="container pt-5 py-5">
        <div class="row match-height justify-content-center ">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Forget Password Form</h4>
                    </div>
                    <div id="errormsg">

                    </div>
                    <?php
                    // if($result){
                    // echo '<div class="alert alert-danger" role="alert">
                    //   User Name And Password Not Match 
                    //    </div>';
                    // }
                    ?>
                    <div class="card-content">
                        <div class="card-body py-4">
                            <form class="form form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>"
                                onsubmit="" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email" value="<?php if(isset($_POST['fpswd']))
                                            { if($file){ 
                                              echo $data['email'];
                                            }
                                            }
                                            ?>"  class="form-control" name="email"
                                                placeholder="Email">
                                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                        </div>
                                        
                                        <?php 
                                        if(isset($_POST['fpswd'])){
                                        if($file){ 
                                        echo'<div class="col-md-4">
                                            <label>Enter New Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Password">
                                        </div>';
                                        }
                                        else{
                                            echo'<div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            Enter Right Emial This Email Not Match!
                                          </div>';
                                        }
                                    }
                                        ?>
                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1" class='form-check-input'
                                                        checked>
                                                    <label for="checkbox1">Remember Me</label>
                                                </div>
                                            </div>
                                            <?php if($file){  
                                                  echo '<input type="submit" class="btn btn-primary me-1 mb-1"
                                                  name="submit"></input>';
                                             }
                                              else{  
                                          
                                               echo'   
                                            <input type="submit" class="btn btn-primary me-1 mb-1"
                                                name="fpswd" value="Create Password" ></input>';
                                              }?>
                                        </div>
                                        <!-- <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Forget Password</button>
                                             </div> -->
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
 include_once('footer.php');
?>