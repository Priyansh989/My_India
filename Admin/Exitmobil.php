<?php
session_start();
if (isset($_POST['qrcode_text'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$qrcode_text = validate($_POST['qrcode_text']);
}
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

$stmt = $con->prepare('SELECT qr_txt,Ticket_id FROM qr_details WHERE qr_txt = ?');
// //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
$stmt->bind_param("s", $qrcode_text);
$stmt->execute();
$stmt->bind_result($qrchecking, $ticket_id);
$stmt->fetch();
$stmt->close();

if ($ticket_id == "") {
	echo "Ticket Not Found";
	echo " Kindly Contact Administration for more information";
		echo '<a href="index.php"> GO Back</a>';
}
else {
	// Change this to your connection info.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = "id20128286_monumatic_admin_website";
	$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
	$DATABASE_NAME = "id20128286_monumatic_website"; // Try and connect using the info above.	
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, 3306);
	if (mysqli_connect_errno()) {
		// If there is an error with the connection, stop the script and display the error.
		exit('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	$stmt = $con->prepare('SELECT Status FROM Booking_Details WHERE Ticket_ID = ?'); // //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
	$stmt->bind_param("s", $ticket_id);
	$stmt->execute();
	$stmt->bind_result($status);
	$stmt->fetch();
	$stmt->close();
	if($status=="INSIDE") {
		// Change this to your connection info.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = "id20128286_monumatic_admin_website";
	$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
	$DATABASE_NAME = "id20128286_monumatic_website"; // Try and connect using the info above.	
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, 3306);
	if (mysqli_connect_errno()) {
		// If there is an error with the connection, stop the script and display the error.
		exit('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	$stmt = $con->prepare('UPDATE Booking_Details SET Status="TRIP_ENDED" WHERE Ticket_ID = ?'); // //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
	$stmt->bind_param("s", $ticket_id);
	$stmt->execute();
//	$stmt->bind_result($status);
//	$stmt->fetch();
	$stmt->close();
		echo "Exit Marked Successfully Redirecting to Home Page";
		header("refresh: 2; url=index2.php");

		//header('Location: index.php');
	}
	else
	{
		echo "The Ticket Status is : $status  ... Kindly Contact Administration for more information";
		echo '<a href="index.php"> GO Back</a>';
	}
}


?>
