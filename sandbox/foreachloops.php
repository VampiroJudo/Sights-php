<!DOCTYPE html>
<html>
	<head>
		<title>Loops: foreach</title>
	</head>
	<body>
		<?php
			$ages = array(4,8,15,16,23,42);

			foreach($ages as $age) {
				echo "Age: {$age}<br />";
			}

		?>	

	</body>
</html>