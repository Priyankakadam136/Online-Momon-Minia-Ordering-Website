<?php
if(isset($_POST['ok']))
{
	$mobileno=$_POST['mno'];

	// Authorisation details.
	$username = "nitasharma157@gmail.com";
	$hash = "e01334799eb3ef702e270e77e05c9e9b7a1beef866e5e27914eb921be8cee6a1";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
	$message = "Welcome to Momos Minia!!Dear Customer,Your Order will Reach soon.If You have any queries,Do Call Us - 7767109989.Stay Tunned!!Order More!!";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
}
?>