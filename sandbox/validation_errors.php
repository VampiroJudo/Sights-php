<!DOCTYPE html>
<html>
	<head>
		<title>Validation Errors</title>
	</head>
	<body>

	<?php

	$error = array();


	// * presence
	// use trim() so empty spaces dont count
	// use === to avoid false positives
	// empty() would "0" to be empty
	$value = trim("");
	if (!isset($value) || $value === "") {
		$errors['value'] = "Value can't be blank";
		}
    // * string length
    // minumum length
    $value = "abcdef";
    $min = 3;
    if (strlen($value) < $min) {
    	echo "Validation failed.<br />";
    }
    //max length
    $max = 6;
    if (strlen($value) > $max) {
    	echo "Validation failed.<br />";
    }
    // * type
    $value = "1";

    if (!is_string($value)) {
    	echo "Validation failed.<br />";
    }
	// * inclusion in set
    $value = "1";
    $set = array("1", "2", "3", "4",);
    if (!in_array($value, $set)) {
    	echo "Validation failed.<br />";
    }

	// * uniqueness

	$value = "nobody@nowhere.com";
	if (!preg_match("/@/", $value)) {
		echo "Validation failed.<br />";
	}

	if (strpos($value, "@") === false) {
		echo "Validation failed.<br />";
	}


?>

<?php
	// if (!empty($errors)) {
	// 	//redirect_to("first_page.php");
	// 		include("form.php");
	// 	} else {
	// 		include("success.php");
	// }
		
		if (!empty($errors)) {
			echo "<div class=\"error\">";
			echo "Please fix the following errors.";
			echo "<ul>";
			foreach ($errors as $key => $error) {
				echo "<li>{$error}</li>";
			}
			echo "</ul>";
			echo "</div>";
		}

?>

	

	</body>
</html>