<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>


      

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Orders SR.Photography</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
 
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                        <li><li><a href="#">-Albums</a></li>
                                            <li><a href="#">-payment</a></li>
                                            <li><a href="#">-Feedback</a></li>
                                            <li><a href="Confirm/admin/admin.php">-Admin</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="service.html">Servc</a></li>
                                    <li class="active"><a href="first.php">Orders</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/66.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Orders</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Breadcrumb Area End -->

    <div class="page-header">
			<span class="login-signup"></span>
		</div>
		<div class="page-content">Welcome <?php echo $username;?></div>
    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="#">Please select Your Events 🎉 </button>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                        <b>
                            <h4>Pre-Wedding</h4>
                        </b>
                
                        <p>
                        <p>Duration- 1 to 4 days</p>
                       <p> Photographers : 2 to 3</p>
                        <p>Videographer: 1 to 2 </p>
                        <p>Choose Your Outfits : 3 to 4 pairs</p>
                       <p> Locations-short-listed the locations.</p>
                        
                        
                        <hr>
                       
                        <p><b>Pre-Wedding Results</b><p>
                        <br>
                        <p>120 photos + 60 candid Edited photos</p>
                        <p>2 Edited Videos </p>
                       <p> Pendrive </p>
                       <hr> 
                        <p><b>Modern Equipments</b></p>
                       <br>
                       <p>Cameras- Eos R + Eos 6D + Eos 200D</p>
                     <p>Gimbles</p>
                       <p>Drone</p> 
                       <p>Portlight & Softlight</p>
                       <hr>
                       <p>Price: 90-120K(₹)</p>
                        </p>
                        <br>
                        
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>

                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-gift" aria-hidden="true"></i>
                        </div>
                        <h4>Wedding</h4>
                        <p>
                        <p>Duration- 1 to 3 Days</p>
                        <p>Photographers : 3 to 4</p>
                        <p>Videographers : 1 to 2</p>
                        <p>Choose Your Outfits : 3 to 4 pairs</p>
                        <p>Locations- Event Hall & Destination Wedding.</p>
                        
                                     <hr>
                    <p><b> Wedding Results</b></p>
                        <br>
                        <p>All Edited photo + Candid Photos</p>
                        <p>Edited Videos </p>
                        <p>PhotoAlbum + Pendrive </p>
                        <hr>
                        <p><b>Modern Equipments</b></p>
                        <br>
                        <p>Cameras- Eos R + Eos 6D + Eos 200D</p>
                      <p>Gimbles</p>
                        <p>Drone</p> 
                        <p>Portlight & Softlight</p>
                        <hr>
                        <p>Price: 45-70K(₹)</p>
                        </p>
                        <br>
                        
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <h4>Engagement</h4>
                    </b>
            
                    <p>
                    <p>Duration- 1 day</p>
                   <p> Photographers : 2 </p>
                    <p>Videographer: 1 </p>
                    <p>Choose Your Outfits : 1 to 2 pairs</p>
                   <p> Locations- Short-listed the locations.</p>
                
                   
                    <hr>
                   
                    <p><b>Engagement Results</b></p>
                    <br>
                    <p>photos + candid Edited photos</p>
                    <p>Edited Video</p>
                   <p> Pendrive </p>
                   <hr> 
                    <p><b>Modern Equipments</b></p>
                   <br>
                   <p>Cameras- Eos R + Eos 6D + Eos 200D</p>
                 <p>Gimbles</p>
                   <p>Lenses</p> 
                   <p>Portlight & Softlight</p>
                   <hr>
                   <p>Price: 30-35K(₹)</p>
                    </p>                                               
                        </p>
                        <br>
                        
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->


    <style>
 
        /* Thick red border */
        hr.new4 {
          border: 1px solid rgb(45, 237, 237);
          margin-left: 15%;
          margin-right: 15%;
        }
        .btns{
            border-color: rgb(13, 66, 202);
            background-color: rgb(91, 238, 81);
        }
        
        
    .page-content{
       padding-top: 5%;
       text-align: center; 
       color: red;
       font-family:'Charm'; font-size: 22px;
    }

        
        </style>
        </head>
        
        <hr class="new4">
        

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-photo" aria-hidden="true"></i>
                        </div>
                        <b>
                        <h4>Birthday</h4>
                        </b>
                        <p>
                         <p>Duration- 1 to 2 Hours</p>
                         <p>Photographers : 1</p>
                         <p>Videographers : 1</p>
                         <p>Choose Your Outfits : 2 pairs</p>
                         <hr>
                         <p> <b>Results</b></p>
                         <br>
                         <p> Birthday PhotoAlbum </p>
                         <p>Pendrive + Calendar</p>
                         <hr>
                         <p>Price: 10-15k(₹)</p>
                        </p>
                        <br>
                        
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>
    
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                        </div>
                        <h4>Baby Shoot</h4>
                        </b>
                        <p>
                         <p>Duration- 1 Hour</p>
                         <p>Photographers : 1</p>
                         <p>Videographers : 1</p>
                         <p>Choose Your Outfits : 2 to 3 pairs</p>
                         <hr>
                         <p> <b>Results</b></p>
                         <br>
                         <p> Baby PhotoAlbum </p>
                         <p>Pendrive + Calendar</p>
                         <hr>
                         <p>Price: 10K(₹)</p>
                        </p>
                        <br>
                        
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </div>
                        <h4>Outdoor/Indoor</h4>
                    </b>
                    <p>
                     <p>Duration- 1 Hour</p>
                     <p>Photographers : 1 to 2</p>
                     <p>Videographers : 0 </p>
                     <p>Choose Your Outfits : 2 pairs</p>
                     <hr>
                     <p> <b>Results</b></p>
                     <br>
                     <p>Outdoor/Indoor PhotoAlbum </p>
                     <p>Pendrive + Calendar</p>
                     <hr>
                     <p>Price: 100(₹)/Copy </p>
                    </p>
                     <br>
                    
                        <div>
                            <a href="Confirm/confirmation.php" class="btn alime-btn btn-2 mt-15">Book Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->

    
            
    
    </div>
    <!-- Gallery Area End -->


    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>SR_Photography1212</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>SR_Photography</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SR Photography <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Salunke Rahul</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/s.r_photography1212?igshid=YmMyMTA2M2Y="><i class="ti-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>


</body>
</html>