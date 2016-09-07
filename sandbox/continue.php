<!DOCTYPE html>
<html>
	<head>
		<title>Continue</title>
	</head>
	<body>

		<?php

			for ($count = 0; $count <= 10; $count++) {
				if ($count % 2 == 0){
					continue;
				}
				echo $count . ", ";
			}
		?>

		<?php

			for ($i = 0; $i <= 5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k = 0; $k <= 5; $k++) {
					if ($k == 3) {continue(2); }
					echo $i . "-" . $k . "<br />";
				}
			}
		?>
	

	</body>
</html>