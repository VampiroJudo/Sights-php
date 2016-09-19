<?php
	require_once("included_functions.php");
	require_once("validation_functions.php");

	$errors = array();
	$message = "";

	if (isset($_POST['submit'])){
		//form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		//validations
	$fields_required = array("username", "password");
	foreach($fields_required as $field) {
		$value = trim($_POST[$field]);
		if (!has_presence($username)) {
			$errors[$field] = ucfirst($field).  "can't be blank.";
			}
		}

		if (empty($errors)) {
			// try to login
			if ($username == "vampiro" && $password == "secret"){
				//succesful login
				redirect_to("basic.html");
			} else {
      			$message = "There were some errors.";
			}
		} else {
			$username = "";
			$message = "Please log in.";

		}

	}


		
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>

		<?php echo $message; ?><br />
		<?php echo form_errors($errors) ?><br />

		<form action="form_single.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"<br />
			Password: <input type="password" name="password" value=""/><br />
			<br />
			<input type="submit" name="submit" value="Submit"/>
		</form>

	

	</body>
</html>