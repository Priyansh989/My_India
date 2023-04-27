<?php
$var_value1 = $_GET['varname'];
?>
<?php
$temp = $_POST['nationality'];
if ($temp == "NRI") {
    $nationality_chk = "NRI_Price";
} else {
    $nationality_chk = "Indian_Price";
}

session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = "id20128286_monumatic_admin_website";
$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
$DATABASE_NAME = "id20128286_monumatic_website";
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, 3306);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT ' . $nationality_chk . ' FROM Monment_pricing_table WHERE Monument_Name = ?');
//  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
$stmt->bind_param("s", $var_value1);
$stmt->execute();
$stmt->bind_result($ticket_price);
$stmt->fetch();
$stmt->close();

?>
<?php

$parking_value = $_POST['parking'];
if ($parking_value == 'None') {
    $parking_price = 0;
} else {
    if ($parking_value == "Car") {
        $parking_chk = "Car_Price";
    } else if ($parking_value == "Bike") {
        $parking_chk = "Bike_Price";
    }

    //
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = "id20128286_monumatic_admin_website";
    $DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
    $DATABASE_NAME = "id20128286_monumatic_website";
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, 3306);
    if (mysqli_connect_errno()) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $stmt = $con->prepare('SELECT ' . $parking_chk . ' FROM Parking_pricing_table WHERE Monument_Name = ?');
    //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
    $stmt->bind_param("s", $var_value1);
    $stmt->execute();
    $stmt->bind_result($parking_price);
    $stmt->fetch();
    $stmt->close();
}
session_start();
// Change this to your connection info.

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
        <section class="booking-section booking-process-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="booking-process-content mr-20">
                            <ul class="process-label clearfix">
                                <li><span>1.</span>Personal Info</li>
                                <li class="current"><span>2.</span>Payment Info</li>
                                <li><span>3.</span>Confirm</li>
                            </ul>
                            <div class="inner-box">
                                <h3>Billing Details</h3>
                                <form action="Booking-3.php" method="post" class="processing-form">
                                    <div class="row clearfix">

                                        <input type="hidden" name="hiddenname" required="" value="<?php echo $_POST['name']; ?>" readonly>
                                        <input type="hidden" name="hiddenage" required="" value="<?php echo $_POST['age']; ?>" readonly>
                                        <input type="hidden" name="hiddengender" required="" value="<?php echo $_POST['gender']; ?>" readonly>
                                        <input type="hidden" name="hiddenphoneno" required="" value="<?php echo $_POST['phoneno']; ?>" readonly>
                                        <input type="hidden" name="hiddenaddress" required="" value="<?php echo $_POST['address']; ?>" readonly>
                                        <input type="hidden" name="hiddencountry" required="" value="<?php echo $_POST['country']; ?>" readonly>
                                        <input type="hidden" name="hiddennationality" required="" value="<?php echo $_POST['nationality']; ?>" readonly>
                                        <input type="hidden" name="hiddendateofvisit" required="" value="<?php echo $_POST['dateofvisit']; ?>" readonly>
                                        <input type="hidden" name="hiddendparking" required="" value="<?php echo $_POST['parking']; ?>" readonly>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Monument Name</label>
                                                <input type="text" name="m_name" required="" value="<?php echo $var_value1; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <input type="text" required="" value="<?php echo $_POST['nationality']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Booking Date</label>
                                                <input type="text" name="address1" required="" value="<?php echo $_POST['dateofvisit']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Ticket Price</label>
                                                <input type="text" name="ticket_price" required="" value="<?php echo $ticket_price; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Parking Price</label>
                                                <input type="text" name="parking_price" required="" value="<?php echo $parking_price; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" required="" value="<?php echo $_POST['name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" required="" value="<?php echo $_POST['age']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" required="" value="<?php echo $_POST['phoneno']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" required="" value="<?php echo $_POST['country']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-option">
                                        <h3>Card Info</h3>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Card Holder Name</label>
                                                    <input type="text" name="card_name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" name="card_number" required="" pattern="\d*" pattern="\w{12,16}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>CVV</label>
                                                    <input type="text" name="cvv" required="" pattern="\d*" pattern="\w{3,4}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Expiration Date</label>
                                                    <input type="text" name="exp_date" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn clearfix">
                                                    <a href="booking-1.php" class="theme-btn"><i class="far fa-angle-left"></i>Back</a>
                                                    <button type="submit" class="theme-btn">Next<i class="far fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
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
                                       <li><a href="index.html">Home</a></li>
                                    <li><a href="index.html">About Us</a></li>
                                    <li><a href="destination.html">Explore</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="https://shubham-monumatic.000webhostapp.com/MonumaticHelpdesk/">HelpDesk Portal</a></li>
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