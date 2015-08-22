<?php include('header.php'); 
?>

<div class="leftmain">
<h1>Request images</h1>
<p>&nbsp;</p>

<p>We would love to be a useful resource for you and your research. Please send requests for subjects, specific architects, countries, time periods, image types, or anything else that you would like to see more of in our collection!</p>


<?php //PHP request form
require '/PHPMailer-master/PHPMailerAutoload.php';
if (isset($_REQUEST['email'])) { //if "email" is filled out, send email
	$mail = new PHPMailer;
	$mail->Port=25;
	$mail->isSMTP();                                      	// Set mailer to use SMTP
	$mail->Host = '128.59.128.204';  							// Specify main and backup server
	$mail->SMTPAuth = false;                               // Enable SMTP authentication
	//$mail->Username = 'slibemail';                            // SMTP username
	//$mail->Password = 'MM&W1912';                           // SMTP password
	//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = $_REQUEST['email'];
	$mail->FromName = 'Mailer';
	$mail->addAddress('gsappslidelibrary@gmail.com');  // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	//$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $_REQUEST['subject'];
	$mail->Body    = $_REQUEST['message'];
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}

	echo "Thank you  for your submission. Your message is as follows: <br>";
	echo "From:" . $email."<br>";
	echo "Subject:" . $subject."<br>";
	echo "Message:" . $message."<br>";
	
	//send email
	/*$email = $_REQUEST['email'] ;
	$subject = $_REQUEST['subject'] ;
	$message = $_REQUEST['message'] ;
	mail("gsappslidelibrary@gmail.com","[Online Submission Form] ".$subject,$message,"From:".$email);*/
	
} else { //if "email" is not filled out, display the form ?>
	<form method='post' action='request.php'>
	<table class="webform">
	<tr><td class='webformleft'>Your Email: </td><td><input name='email' type='text' class='webformright'></td></tr>
	<tr><td class='webformleft'>Subject: </td><td><input name='subject' type='text' class='webformright'></td></tr>
	<tr><td class='webformleft'>Message: </td><td><textarea name='message' type='text' class='webformright' rows='10'></textarea></td></tr>
	<tr><td></td><td><input type='submit'></td></tr>
	</table>
	</form>
	<?php
}
?>

<p>&nbsp;</p>
</div>

<?php include('footer.php'); ?>