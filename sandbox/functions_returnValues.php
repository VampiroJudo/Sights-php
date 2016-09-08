<!DOCTYPE html>
<html>
	<head>
		<title>Functions: Return Values</title>
	</head>
	<body>
		
		<?php

			function add($val1, $val2) {
				$sum = $val1 + $val2;
				return $sum;
			}

			$result1 = add(3,4);
			$result2 = add(5,$result1);
			echo $result2;
		?>
		<br />
		
		<?php

		function better_hello($greeting, $target, $punct) {
			return $greeting . " " . $target . $punct . "<br />";
			}

			echo better_hello("Hello", "John Doe", "!");

		?>



	</body>
</html>