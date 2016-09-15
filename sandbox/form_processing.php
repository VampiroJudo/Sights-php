<!DOCTYPE html>
<html>
	<head>
		<title>Form Processing</title>
	</head>
	<body>


		<pre>
			<?php
				print_r($_POST);
			?>
		</pre>
		<br />

		<?php 
			//set default values

			if (isset($_POST["username"])){
				$username = $_POST["username"];
			} else {
				$username = "";
			}

			if (isset($_POST["password"])){
				$password = $_POST["password"];
			} else {
				$password = "";
			}
			
			echo "{$username}: {$password}";
		?>

	

	</body>
</html
