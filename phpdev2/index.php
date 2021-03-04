<?php

// $cookie_name = "username";
// $cookie_val = "devuser";

// setcookie($cookie_name, $cookie_val, time()+3600);


//START SESSION
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title>Cookies - PHP</title> -->
	<title>Sessions - PHP</title>
</head>
<body>
	<?php
	    // if(!isset($_COOKIE[$cookie_name])){
	    // 	echo 'Cookie - '.$cookie_name.' is not set';
	    // } else{
	    // 	echo 'Cookie - '.$cookie_name.' is set<br>';
	    // 	echo 'Cookie Value - '.$cookie_val;
	    // }



       //SET SESSION VARS
	   $_SESSION['username'] = 'devuser';
	   $_SESSION['email'] = 'devuser@gmail.com';
	   echo 'Session vars set';


	?>
</body>
</html>