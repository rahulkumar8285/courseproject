<?php require_once("header.php");?>
<main>
    <!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>All Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- all-course Start -->
    <section class="all-course pt-5">
        <div class="container">
            <div class="row">
                <div class="all-course-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row mb-15">
                        <div class="col-lg-12">
                            <div class="properties__button mb-90">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">All</a>
                                        <?php $catresult = ShowData("coursecat");
                                            
                                              while($row = mysqli_fetch_assoc($catresult)){?>

                                        <a class="nav-item nav-link" id="<?php echo $row['id'];?>-tab" data-toggle="tab"
                                            href="#<?php echo $row['id'];?>" role="tab"
                                            aria-controls="<?php echo $row['catname'];?>"
                                            aria-selected="false"><?php echo $row['catname'];?></a>
                                        <?php
                                             }?>

                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!--  one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <?php $result = ShowDataCourse("course");
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
                                </div>
                                <!--  Two -->
                                <?php $catresult = ShowData("coursecat");
                                         while($row = mysqli_fetch_assoc($catresult)){?>
                                <div class="tab-pane fade" id="<?php echo $row['id'];?>" role="tabpanel"
                                    aria-labelledby="<?php echo $row['catname'];?>">
                                    <div class="row">
                                        <?php 
                                           $cousedata = StatusCourse('course','councatg',$row['id']);
                                            while($row = mysqli_fetch_assoc($cousedata)){ ?>
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
                                </div>
                                <?php }?>
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-course End -->
</main>
<?php require_once("footer.php");