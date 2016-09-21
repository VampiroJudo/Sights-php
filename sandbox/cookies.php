<?php
// REMEMBER: Setting cookies must be before *any* HTML output, unless output buffering is turned on.
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // add seconds
	setcookie($name, $value, $expire);
?> 




<!DOCTYPE html>
<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>

		<?php 
		$test = isset($_COOKIE["test"]) ? $_COOKIE["test"]: "";

		echo $test;
		?>
		


	

	</body>
</html>