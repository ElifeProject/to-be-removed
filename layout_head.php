<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "E-Life";?></title>
    <!--<title>E-Life</title>-->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo $home_url . "style.css" ?>"/>
    <!--<link rel="stylesheet" href="style.css" ? />-->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!--<?php include_once 'navigation_bar.php' ; ?>-->
                    <header class="header-area">
        
        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/logo.png" style="width: 100px;"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav font-cursive">
                                <ul>
                                    <li <?php echo $page_title=="Index"? "class='active'" : "";?>>
                                        <a href="<?php echo $home_url; ?>"></a>Home</li>
                                    <!--<li><a href="index.php">Home</a></li>-->
                                    <li><a href="#">Catalogue</a>
                                        <ul class="dropdown">
                                            <li><a href="E-Life_Computer_Accessories.php">Computer Peripherals</a></li>   
                                            <li><a href="Project_Accessories.php">Project Accessories</a></li>
                                            <li><a href="E-Life_Book_Store.php">Book Store</a></li>
                                            <li><a href="Stationary_Store.php">Stationary Store</a></li>
                                            <li><a href="E-Life_Grocery_Store.php">Grocery Store</a></li>           
                                            <li><a href="Men's_Fashion.php">Men's Fashion</a></li>
                                            <li><a href="Women's_Fashion.php">Women's Fashion</a></li> 
                                            <li><a href="E-Life_Special.php">E-Life Special</a></li>
                                        </ul>
                                    </li>
                                    <!--check customer was logged in or not-->
                                <?php
                                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true &&  $_SESSION['access_level']=='Customer'){
                                     ?>   
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Edit Profile"? "class='active'" : "";?>>
                                            <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-expanded="false">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                &nbsp;&nbsp;<?php echo $_SESSION['firsrtname']; ?>
                                                &nbsp;&nbsp;<span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                // login and register option 
                                else{
                                    ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Login" ? "class='active'" : "";?>>
                                            <a href="<?php echo $home_url; ?>Login">
                                                <span class="glyphicon glyphicon-check"></span>SignUp
                                            </a>   
                                        </li>
                                    </ul>
                                }
                                    <!--<li><a href="SignUp.php">Sign Up</a></li>
                                    <li><a href="login.php">Log In</a></li>
                                    <li><a href="">Cart</a></li>
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
                    <!--if page title is login dont display the title -->
                    <?php
                     if($page_title!="Login"){
                        ?>
                    <div class='col-md-12'>
                        <div class="page-header">
                            <h1><?php echo isset($page_title) ? $page_title :"Hello World"; ?></h1>
                        </div>
                    </div>
                    <?php
                     }
                    ?>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
        <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/3.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/2.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/7.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/4.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/5.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/6.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center font-cursive">
                                <h2>E-Life</h2>
                                <p>E-Life will provide best shipping facilities to the university students so that they can complete their semester projects with comfort and ease. E-Life will provide home spun to the students.</p>
                                <!-- <div class="welcome-btn-group">
                                    <a href="SignUp.php" class="btn alazea-btn mr-30">SIGN UP</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100" id="AboutUs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center font-cursive">
                        <h2>ABOUT US</h2>
                        <h5 class="font-cursive justify-content-between">
                            Being engineering students, we have to rush towards the market when we have to submit out projects and deadline is just around the corner. The purpose of the project is to provide best shipping facilities specifically in engineering domain. With zero delay time, E-Life will deliver all the equipment you desire on your doorstep. E-Life will cater home spun to the students as this is the major goal behind the development of the project. 
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->