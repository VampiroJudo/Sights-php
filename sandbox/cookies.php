<?php
// REMEMBER: Setting cookies must be before *any* HTML output, unless output buffering is turned on.
	$name = "test";
	$value = 45;
	$expire = time() + (60*60*24*7); // add seconds
	setcookie($name, $value, $expire);
?> 




<!DOCTYPE html>
<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>


	

	</body>
</html>