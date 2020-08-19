<?php

if (isset($_POST['name']) && isset($_POST['message'])) {

	$name = $_POST['name'];
	$message = $_POST['message'];
	$to = 'gnaneshwar.bandari07@gmail.com';
	$subject = 'new message';
	$body = .$message;

	$headers = "From:".$name."$message".">\r\n";
	$headers .=  "Reply-To: ".$message."\r\n";
	$headers .= "MINE-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8";

	$send = mail($to, $subject, $body, $headers);
	if($send) {
		echo '<br>';
		echo 'Thanks for contacting me. I will be with you shortly';
	} else {
		echo 'error';
	}
}

?>

