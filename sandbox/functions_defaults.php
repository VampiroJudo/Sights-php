<!DOCTYPE html>
<html>
	<head>
		<title>Basic HTML</title>
	</head>
	<body>

		<?php

			function paint($room="office" ,$color="red"){
				return "The color of the {$room} is {$color}.<br />";
			}
				echo paint();
				echo paint("bedroom", "blue");
				echo paint("bedroom", null);
		?>


	

	</body>
</html>