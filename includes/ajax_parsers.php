<?php 
if (isset($_POST['action']) && !empty($_POST['action'])) {
	include_once 'conx.php';
	$now = date('Y-m-d H:i:s');
	if ($_POST['action'] == 'contact') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['msg'];
		$to = "jamiadarulquran@yahoo.com";
		$subject = "Mail from Jamia Darul Quran";
		$message = "
		<html>
		<head>
		<title>Contact Mail</title>
		</head>
		<body>
		<p>Message From $name &lt;$email&gt;</p>
		<p>$msg</p>
		<p>Phone: $phone</p>
		</body>
		</html>
		";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n".
            'Reply-To: '.  $email . "\r\n";
		// ini_set("SMTP","smtp.nyu.edu");
		// ini_set("smtp_port","25");
		ini_set('sendmail_from', "$email" ); // My usual e-mail address
		if (mail($to,$subject,$message,$headers,"-f$email")) {
			header('location:../contact-us.php?msg=Message Sent');
		}else{
			header('location:../contact-us.php?msg=Message Sending failed');
		}
	}
}
?>