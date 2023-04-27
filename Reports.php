<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Admin Login.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = "id20128286_monumatic_admin_website";
$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
$DATABASE_NAME = "id20128286_monumatic_website";
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, EMAIL, username, DOB, phone, idcredential,address,validation_code FROM Customer_Table WHERE cutomer_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('s', $_SESSION['cutomer_id']);
$stmt->execute();
$stmt->bind_result($password, $email, $username, $datebirth, $phone, $idcr, $address, $validation);
$stmt->fetch();
$stmt->close();

?>


<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>Monumatic</title>

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

                                        <li class="current dropdown"><a href="Admin_Home.html">Home</a></li>
                                        <li><a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
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
		<section class="page-title centred" style="background-image: url(assets/images/background/page-title-2.jpg);">
			<div class="auto-container">
				<div class="content-box">
					<h1>Reports</h1>
				</div>
			</div>
		</section>
		<!-- End Page Title -->

 <!-- register-section -->
 <section class="register-section sec-pad">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="sec-title centred">                        
                    </div>
                    <div class="form-inner">
                        <form action="Reports.php" method="post" class="register-form">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Monument Name</label>
										<select name="monument" id="monument" required="">
											<option>--Select Option--</option>
											<option>IndiaGate</option>
											<option>HumayunTomb</option>
											<option>QutubMinar</option>
											<option>AkshardhamMandir</option>
										
											<option>VictoriaMemorial</option>
											<option>MarblePalace</option>
											<option>IndianMeuseum</option>
											<option>HazarduariPalace</option>
											
											<option>GateWayOfIndia</option>
											<option>AjantaCaves</option>
											<option>ChhatrapatiShivajiMaharajVsatuSangh</option>
											<option>ElloraCaves</option>

											<option>ChittorgarhFort</option>
											<option>HawaMahal</option>
											<option>MehrangarhFortMuseumandTrust</option>
											<option>JaisalmerFort</option>
										
											<option>YudhishthrasChariot</option>
											<option>valluvarkottalam</option>
											<option>ArjunChariot</option>
											<option>MuktesvaraTemple</option>

											<option>TipuSultanFort</option>
											<option>LakarpurSheikhChillisTomb</option>
											<option>BangalorePalace</option>
											<option>LalbaghBotanicalGarden</option>

											<option>BuddhistCaveGroup</option>
											<option>AshokanRocksEdicts</option>
											<option>Ranikivav</option>
											<option>ModheraSunTemple</option>

											<option>TajMahal</option>
											<option>AgraFort</option>
											<option>FatehpurSikri</option>
											<option>TombofAkbar</option>

											<option>Surajkund</option>
											<option>LakarpurSheikhChillisTomb</option>
											<option>StarMonument</option>
											<option>QutubKhantomb</option>

											<option>GoldenTemple</option>
											<option>JallianwalaBagh</option>
											<option>QuillaMubarak</option>
											<option>FatehBurj</option>

										</select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Date of Visit</label>
                                        <input type="date" name="date" id="date" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn">Generate Reports</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- register-section end -->

		<!-- destination-details -->
		<section class="destination-details">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 content-side">
						<div class="destination-details-content">

							<div class="country-details">
								<div class="text">
									<h3>Ticket Details</h3>
								</div>
								<ul class="details-list clearfix">
									<li><span>Ticket ID: </span>Monument_Name<span>:</span>Visiting Date </li>
									<?php

									$servername = "localhost";
									$username = "id20128286_monumatic_admin_website";
									$password = "mmf^&1(4n#H=S^LQ";
									$dbname = "id20128286_monumatic_website";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}
									$HELLO = $_SESSION['cutomer_id'];
									//echo $_POST['monument'];
									if($_POST['date']=="")
									{
										$sql = "SELECT Ticket_id, Monument_name, date_of_visit FROM Booking_Details WHERE Monument_Name ='" . $_POST['monument'] . "' ";
									$result = $conn->query($sql);
									}
									else{
									$sql = "SELECT Ticket_id, Monument_name, date_of_visit FROM Booking_Details WHERE Monument_Name ='" . $_POST['monument'] . "' AND Date_of_visit ='" . $_POST['date'] . "'";
									$result = $conn->query($sql);
								}

									if ($result->num_rows > 0) {
										echo "<table border='1'>";
										// output data of each row
										while ($row = $result->fetch_assoc()) {
											echo "<tr><td>" . str_repeat('&nbsp;', 5) . $row["Ticket_id"] . "</td><td>" . str_repeat('&nbsp;', 20) . $row["Monument_name"] . "</td><td>" . str_repeat('&nbsp;', 55) . $row["date_of_visit"] . "</td></tr>";
										}
										echo "</table>";
									}
									else {
										echo "0 results";
									}

									$conn->close();
									?>
							
								</ul>
							</div>
						</div>
					</div>

				</div>
								</div>
		</section>
		<!-- destination-details end -->


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

	<!-- map script -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/map-helper.js"></script>

	<!-- main-js -->
	<script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->


</html>