<?php
session_start();
include('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
// Insert a logo in the top-left corner at 300 dpi
// Insert a dynamic image from a URL
//$pdf->Image('https://shubham-monumatic.000webhostapp.com//assets/images/HEADER.png', 60, 30, 90, 0, 'PNG');
$pdf->Image('https://shubham-monumatic.000webhostapp.com//assets/images/HEADER.png', 0, 7, 220, 50, 'PNG');
$pdf->SetFont("Arial", "", 16);
$pdf->Cell(0, 50, "", 1, 1, 'C');
$pdf->Cell(0, 10, "MONUMENT TICKET", 1, 1, 'C');
//
$tckt_id = $_GET['1'];
$pdf->Cell(70, 10, "TICKET - ID", 1, 0, 'C');
$pdf->Cell(0, 10, $tckt_id, 1, 1, 'C');
//
$monument_name = $_GET['2'];
$pdf->Cell(70, 10, "MOUNUMENT - NAME", 1, 0, 'C');
$pdf->Cell(0, 10, $monument_name, 1, 1, 'C');
// ROW 1
//echo $monument_name;
$date_of_visit = $_GET['3'];
$pdf->Cell(70, 10, "DATE OF VISIT", 1, 0, 'C');
$pdf->Cell(0, 10, $date_of_visit, 1, 1, 'C');

// //ROW 2
$cust_name =  $_GET['4'];
$pdf->Cell(70, 10, "NAME", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_name, 1, 1, 'C');
//
$cust_age =  $_GET['5'];
$pdf->Cell(70, 10, "AGE", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_age, 1, 1, 'C');
//
$cust_gender =  $_GET['6'];
$pdf->Cell(70, 10, "GENDER", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_gender, 1, 1, 'C');
//
$cust_phone_no =  $_GET['7'];
$pdf->Cell(70, 10, "CONTACT NUMBER", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_phone_no, 1, 1, 'C');
//
$cust_nationality =  $_GET['8'];
$pdf->Cell(70, 10, "NATIONALITY", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_nationality, 1, 1, 'C');
//
$cust_parking =  $_GET['9'];
$pdf->Cell(70, 10, "PARKING", 1, 0, 'C');
$pdf->Cell(0, 10, $cust_parking, 1, 1, 'C');
$file =  $_GET['10'];
$pdf->Cell(0, 110, "", 1, 0, 'C');
$pdf->Image($file, 60, 162, 100, 100,'PNG');
//
// position of text1, numerical, of course, not x1 and y1
$pdf->Write(58, '   ****** This is a System Generated Ticket Signature not Required ******');
// //$pdf->Output('D', 'Ticket-Monumatic.pdf');

 
	
	$file = 'TcktPdf/' . $tckt_id . ".pdf";

    $pdf->Output($file,'F');
	// output
	// switch ($pdf->Output("D", $file)) {
	// 	default:
	// 		header("location: home.php?");
	// } 
  // $pdf->Output( $tckt_id.'.pdf', "I");
//echo $_GET['1'];
// $var_value = $_GET['varname'];

?>
<?php
 



?>


<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = "id19994772_monumatic_website";
$DATABASE_PASS = 'mmf^&1(4n#H=S^LQ';
$DATABASE_NAME = "id19994772_monumatic_website";
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
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Please find attached ticket for your booking for ticket id :'.$tckt_id;

	$mail->Body='Dear'.$cust_name;

	$mail->Body='Please Find Attached ticket for your visit<br/><br/><br/><br/>Thanks for Booking the Ticket through Monumatic<br/><br/><br/>This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. If you have received this email in error please notify the system manager. This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. If you are not the intended recipient you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited . The information contained in this mail is propriety and strictly confidential.<br/><br/><br/>Monumatic &copy; all right reserved';

	$mail->AddAttachment($file, '', $encoding = 'base64', $type = 'application/pdf');

    $mail->send();

} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}
if (header('Refresh: 1; URL=https://shubham-monumatic.000webhostapp.com//Home.php')) {}

?>

<HTML>
    <HEAD>
        <script>
setTimeout(function (){ window.location.href="https://shubham-monumatic.000webhostapp.com//Home.php";},00);
</script>
    </HEAD>
</HTML>
