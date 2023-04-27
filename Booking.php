<?php
$var_value = $_GET['varname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Book Now</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>

<!-- page wrapper -->

<body style="background-image: url('assets/images/resource/white-paper-texture.jpg') !important;">


    <div class="boxed_wrapper">
        <!-- main header -->
        <header class="main-header style-one">
          <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="contact.html"><img src="assets/images/logo1.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">

                                        <li class="current dropdown"><a href="Home.php">Home</a></li>
                                        <li class="dropdown">	<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a></li>
                                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <ul class="menu-right-content clearfix">
                <li class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                            <div class="form-container">
                                <form method="post" action="http://azim.commonsupport.com/Monumatic/blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="user-link">
                    <a href="signup.html"><i class="icon-Profile"></i></a>
                </li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="contact.html"><img src="assets/images/logo1.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <!-- <ul class="menu-right-content clearfix">
                <li class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                            <div class="form-container">
                                <form method="post" action="http://azim.commonsupport.com/Monumatic/blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="user-link">
                    <a href="signup.html"><i class="icon-Profile"></i></a>
                </li>
            </ul> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="contact.html"><img src="assets/images/logo1.png" alt="" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Monumatic</li>
                        <li><a href="tel:+91 00000 00000">+91 00000 00000</a></li>
                        <li><a href="mailto:info@example.com">shubham.monumatic@gmail.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="contact.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="contact.html"><img src="assets/images/logo-2.png" alt="" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>JIMS VK</li>
                        <li><a href="tel:+910000000000">+91 000 000 0000</a></li>
                        <li><a href="mailto:shubham_monumatic@outlook.cm"></a>shubham_monumatic@outlook.cm</li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="contact.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="contact.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Book <?php echo $var_value; ?></h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- booking-section -->
        <section class="booking-section booking-process-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="booking-process-content mr-20">
                            <ul class="process-label clearfix">
                                <li class="current"><span>1.</span>Personal Info</li>
                                <li><span>2.</span>Payment Info</li>
                                <li><span>3.</span>Confirm</li>
                            </ul>
                            <div class="inner-box">
                                <h3>Personal Info</h3>
                                <form action="Booking-2.php?varname=<?php echo $var_value; ?>" method="post" class="processing-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" name="age" required="" pattern="\d*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select id="gender" name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" name="phoneno" required=""  pattern="[7-9]{1}[0-9]{9}" pattern="\d*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <select id="nationality" name="nationality">
                                                    <option value="Indian">Indian</option>
                                                    <option value="NRI">NRI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Parking</label>
                                                <select id="parking" name="parking">
                                                    <option value="None">None</option>
                                                    <option value="Car">Car</option>
                                                    <option value="Bike">Bike</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label><br>
                                                    Date of Visit</label>
                                                <input type="date" name="dateofvisit" id="date_picker" required="">
                                                <script language="javascript">
                                                    var today = new Date();
                                                    var dd = String(today.getDate()).padStart(2, '0');
                                                    var mm = String(today.getMonth() + 1).padStart(2, '0');
                                                    var yyyy = today.getFullYear();

                                                    today = yyyy + '-' + mm + '-' + dd;
                                                    $('#date_picker').attr('min', today);
                                                </script>

                                            </div>
                                        </div>
                                    </div>


                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group message-btn text-right">
                            <button type="submit" class="theme-btn">Next<i class="far fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </div>
    </div>

    </div>
    </section>
    <!-- booking-section end -->


    <!-- main-footer -->
    <footer class="main-footer bg-color-2">
        <div class="footer-top">
            <div class="vector-bg" style="background-image: url(assets/images/shape/shape-11.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.html"><img src="assets/images/logo1.png" alt=""></a></figure>
                            <div class="text">
                                <p>Monumatic Qr Based Paperless Vistor Management System</p>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h3>Services</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="index.html">About Us</a></li>
                                    <li><a href="index.html">Listing</a></li>
                                    <li><a href="index.html">How It Works</a></li>
                                    <li><a href="index.html">Our Services</a></li>
                                    <li><a href="index.html">Our Blog</a></li>
                                    <li><a href="index.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h3>Contacts</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt" style="color: white !important;"></i>JIMS
                                        VK</li>
                                    <li><i class="fas fa-microphone" style="color: white !important;"></i><a href="tel:+910000000000" style="color: white !important;">+91 00000
                                            00000</a></li>
                                    <li><i class="fas fa-envelope" style="color: white !important;"></i><a href="mailto:shubham.monumatic@gmail.com">shubham.monumatic@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="bottom-inner clearfix">
                    <div class="copyright pull-left">
                        <p><a href="index.html">Monumatic</a> &copy; 2022 All Right Reserved</p>
                    </div>
                    <ul class="footer-nav pull-right">
                        <li><a href="index.html">Terms of Service</a></li>
                        <li><a href="index.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/product-filter.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Travio/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2022 10:12:42 GMT -->

</html>