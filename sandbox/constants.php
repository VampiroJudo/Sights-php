<!DOCTYPE html>
<html>
	<head>
		<title>Constants</title>
	</head>
	<body>

		<?php
			$max_width = 980; //not a constant

			define("MAX_WIDTH", 980);
			 echo MAX_WIDTH
		?>
		<br />
		<?php // can't change the value 
		//MAX_WIDTH = MAX_WIDTH + 1
		//echo MAX_WIDTH
		?>
		<?php // can't even redifine it
		define("MAX_WIDTH", 981);
		echo MAX_WIDTH;
		?>
	</body>
</html>