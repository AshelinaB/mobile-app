<?php

if(isset($_POST['email'])){
	$n= $_POST['name'];
	$e = $_POST['email'];
	$m = $_POST['message'];
	$m = "$n\n$e\n$m";
	

	$s = "Message from $n";

	$t ="ashley.broadbelt@gmail.com";

	$h = 'From: '.$t. "\r\n". 'Reply-To: '.$t."\r\n".'X-mailer:PHP/'.phpversion();

	mail($t,$s,$m,$h);
	header('Location: thankyou.html');
}
?>