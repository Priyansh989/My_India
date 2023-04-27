 <?php
	$conn = mysqli_connect("localhost", "id20128286_monumatic_website", "mmf^&1(4n#H=S^LQ", "id20128286_monumatic_website");


	$res = mysqli_query($conn, "select Serial from Customer_Table");
	while ($row = mysqli_fetch_array($res)) {
		$temp = $row['Serial'];
	}
	$temp = $temp + 1;
	// $slno4= "BRQ/2019/". $slno4;  //Customized form of serial no.
	$Customer_id = 'MONUMATIC-000' . $temp;
	// $slno4= "BRQ/2019/". $slno4;  //Customized form of serial no.


	?> 
<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = "id20128286_monumatic_admin_website";
$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';	
$DATABASE_NAME = "id20128286_monumatic_website";
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME,3306);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
///
/*code for auto sl. no. */

$uniqid = uniqid();

///
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT username, password FROM Customer_Table WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Insert new account

		if ($stmt = $con->prepare('INSERT INTO Customer_Table VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$stmt->bind_param('issssssssss', $temp, $Customer_id, $_POST['username'], $_POST['password'], $_POST['cust_DOB'], $_POST['cust_phone_number'], $_POST['id_credential'], $_POST['cust_name'], $_POST['email'], $_POST['address'], $uniqid);
			$stmt->execute();
			echo 'Please check your email to activate your account!'.$Customer_id;
		} else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();

?>
<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
   // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='shubham.monumatic@gmail.com'; // SMTP username
    $mail->Password='// please add your password here'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('sender@whatever.com', "Monumatic");

    //recipient
    $mail->addAddress($_POST['email']);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Activation Required';
	$activate_link = 'https://shubham-monumatic.000webhostapp.com//activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
	// $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';

    $mail->Body='Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a>';
    $mail->send();

    echo 'Message has been sent';
} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}

?>