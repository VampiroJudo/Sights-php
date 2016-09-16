<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php 
			function is_equal($value1, $value2) {
				$output = "{$value} == {$value2}: ";
				if ($value1 == $value2) {
					$output .= "true<br />";
				} else {
					$output .= "false<br />";
				}
				return $output;
			}
		?>

	

	</body>
</html>