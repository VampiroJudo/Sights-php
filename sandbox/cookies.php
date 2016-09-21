<?php
// REMEMBER: Setting cookies must be before *any* HTML output, unless output buffering is turned on.
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // add seconds
	//set_cookie($name, $value, $expire);
	//$set_cookie($name);
	// set_cookie(:$name, null, $expire);
	set_cookie($nam4, $value, time() - 3600);
;?> 





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