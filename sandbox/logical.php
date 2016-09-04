<!DOCTYPE html>
<html>
	<head>
		<title>Logical</title>
	</head>
	<body>

		<?php 
			$a = 4;
			$b = 3;

			if ($a > $b) {
				echo "a is larger than b";
			} 
		?>
		<br />

		<?php //Only welcome new users
			$new_user = true;
			if ($new_user) {
				echo "<h1>Welcome!</h1>";
				echo "<p>We are glad you decided to join us.</p>";
			}
		?>
		<br />
	</body>
</html>