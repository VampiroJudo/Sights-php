<!DOCTYPE html>
<html>
	<head>
		<title>Basic HTML</title>
	</head>
	<body>
	
		<?php
			$count = 0;
			while ($count <= 10) {
				if ($count == 5) {
				  echo "FIVE, ";
				} else {
				  echo $count . ", ";
				}
				  $count++; //increment by 1
			}
			echo "<br />";
			echo "Count: {$count}";
		?>	
		

	</body>
</html>