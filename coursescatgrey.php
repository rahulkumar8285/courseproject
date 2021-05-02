<?php
 include_once("header.php");
 require_once('function.inc.php');
if(isset($_GET['coursecat'])){
 echo $coursecat = $_GET['coursecat'];
 $result = SelectData('course','councatg',$coursecat);
 $catagre = SelectData('coursecat','id',$_GET['coursecat']);
 $catname =  mysqli_fetch_assoc($catagre);
// echo "<pre>";
//  print_r($catname);
// echo "</pre>";
}
// else{$result = ShowData("course");}
?>
<div class="popular-course section-padding30">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <span>Most Popular Course Of This Week</span>
                    <h2>Our Popular Course of <?php echo $catname['catname'];?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                    while($row = mysqli_fetch_assoc($result)){?>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-40">
                    <div class="course-img">
                        <img src="./upload/course/<?php echo $row['imgpath'];?>" alt="">
                    </div>
                    <div class="course-caption">
                        <div class="course-cap-top">
                            <h4><a
                                    href="course-single.php?cid=<?php echo $row['id'] ?>"><?php echo ucwords($row['coursename']);?></a>
                            </h4>
                        </div>
                        <p>
                            <?php echo substr($row['shotdescription'],0,130)."...";?>
                        </p>
                        <div class="course-cap-mid d-flex justify-content-between">
                            <!-- <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div> -->
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="">
                                <h3>INR <?php echo $row['sellprice']; ?></h3>
                            </div>
                            <div class="ml-2">
                                <h4><del><?php echo $row['price']; ?></del></h4>
                            </div>
                            <div>

                            </div>
                        </div>
                        <!-- <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Enroll Now</span>
                                </div> -->
                    </div>      
                </div>
            </div>
            <?php }?>
        </div>
        <!-- Section Button -->
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="courses.php" class="btn">Find More Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>