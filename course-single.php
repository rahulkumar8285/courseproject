<?php require_once("header.php");
      require_once("function.inc.php"); 
      $CourseID = $_GET['cid'];
      $result = SelectData("course",$CourseID);
      $Course = mysqli_fetch_assoc($result);
?>
  <div class="about-area pt-5">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <img src="upload/course/test1.jpg" class="img-fluid"  alt="">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
        
                                <h2 class="pt-2" ><?php echo $Course['coursename'];?></h2>
                            </div>
                            <p><?php echo $Course['shotdescription'];?></p>
                            
                            <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12">
                             <ul>
                                <li><span class="flaticon-business"></span> Total Number Leacher :- <?php echo $Course['totalvideo'];?></li>
                                <li><span class="flaticon-communications-1"></span>Projects :- <?php echo $Course['project'];?></li>
                                <li><span class="flaticon-graduated"></span>Text Notes Files<?php echo $Course['totalvideo'];?></li>
                                <li><span class="flaticon-tools-and-utensils"></span>Text Notes Files<?php echo $Course['totalvideo'];?></li>
                            </ul>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul>
                                <li><span class="flaticon-business"></span> Total Number Leacher :- <?php echo $Course['totalvideo'];?></li>
                                <li><span class="flaticon-communications-1"></span>Projects :- <?php echo $Course['project'];?></li>
                                <li><span class="flaticon-graduated"></span>Text Notes Files<?php echo $Course['totalvideo'];?></li>
                                <li><span class="flaticon-tools-and-utensils"></span>Text Notes Files<?php echo $Course['totalvideo'];?></li>
                            </ul>
                            </div>
                
                            </div>
                            <?php
                              if(isset($_SESSION['name'])||isset($_SESSION['email'])){ 
                               echo'<a href="coursebuy.php?cid='.$CourseID.'" class="btn">
                                        Check Now
                                    </a>';
                               }else{
                            echo'<a href="singup.php?cid='.$CourseID.'" class="btn">Byu Now </a>';     
                               }
                            ?>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!----------------->
<div class="container py-5">
   <h3>Course Discretion</h3>
   <p><?php echo $Course['discretion'];?></p>
</div>
<?php require_once("footer.php");
