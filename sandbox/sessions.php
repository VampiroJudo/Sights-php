<?php 
	// Sessions use cookies which use headers
	// Must start before any HTML output
	// unless output buffering is turned on
	
	session_start(); 

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

	<?php 
		$_SESSION["first_name"] = "John";
		$name = $_SESSION["first_name"];
		echo $name;
	?>

	</body>
</html>