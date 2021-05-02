
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="./assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper ">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <!-- <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="facilityreq.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Facility</span>
                            </a>
                        </li>


                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span> Course</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="coursecat.php">Course Catgrey</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="totaldata.php">Total Course</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="totalvideo.php">Total Lecture</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span> Student</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="coursecat.php">Buy Student</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="totalstudent.php">Total Student</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="totalvideo.php">Total Lecture</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="ThemeOpection.php" class='sidebar-link '>
                                <i class="bi bi-cash"></i>
                                <span>Theme</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>