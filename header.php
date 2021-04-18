<?php require_once('function.inc.php');?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Education | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dropzone/dropzone.css">
    <scrpit src="./assets/js/myscrpit.js"></scrpit>
    <style>
    .profile {
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <!-- Left Social -->
                    <div class="header-left-social">
                        <ul class="header-social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>needhelp@gmail.com</li>
                                        <li>666 7475 25252</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                <?php
                                session_start();
                                if(isset($_SESSION['id'])||isset($_SESSION['name'])||isset($_SESSION['email'])){
                                    echo'<a href="http://localhost/collagepro/student/">
                                    <div class="media align-items-center">
                                     <h4 class="pl-2" >'.$_SESSION['name'].'</h4>
                                     <img src="assets/img/blog/author.png" alt="" class="profile">
                                    </div></a>';
                                }else{
                                    echo '<ul>
                                    <li><a href="login.php"><i class="ti-user"></i>Login</a></li>
                                    <li><a href="singup.php"><i class="ti-lock"></i>Register</a></li>
                                    </ul>';
                                }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="courses.php">Courses</a>
                                            <ul class="submenu">
                                                <?php $result = ShowData("coursecat");
                                             while($row = mysqli_fetch_assoc($result)){?>
                                                <li><a
                                                        href="course.php &courseid=<?php echo $row['id']?>"><?php echo $row['catname'];?></a>
                                                </li>
                                                <?php }
                                            ?>
                                            </ul>
                                        </li>




                                        <li><a href="instructor.php">Instructors</a></li>
                                        <!-- <li><a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog_details.php">Blog Details</a></li>
                                                <li><a href="elements.php">Element</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Search Courses">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>