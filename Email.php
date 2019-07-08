<!DOCTYPE HTML>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validator</title>
</head>
<body>
	<?php
	
	$EmailAddresses = 	array("john.smith@php.test", 
								"mary.smith.mail.php.example",
								"john.jones@php.invalid",
								"alan.smithee@test", 
								"jsmith456@example.com", 
								"jsmith456@test", 
								"mjones@example", 
								"mjones@example.net", 
								"jane.a.doe@example.org");
	
	function validateAddress($Address){
		if(preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)*(\.[A-Za-z]{2,})$/i", $Address) == 1){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	
	foreach($EmailAddresses as $Address) {
		if(validateAddress($Address) == FALSE){
			echo "<p style='color: red'>The e-mail address <strong><em>$Address</em></strong> does not appear to be valid.</p>\n";
		}
		else{
			echo "<em>$Address</em> appears to be a valid e-mail address.</p>\n";
		}
	}
	
	
	
	?>
</body>
</html>