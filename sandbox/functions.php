<!DOCTYPE html>
<html>
	<head>
		<title>Functions</title>
	</head>
	<body>

		<?php

			function say_hello() {
				echo "Hello World!<br />";
		}

		say_hello();


			function say_hello_to($word) {
				echo "Hello {$word}!<br />";
		}

		say_hello_to("World");
		say_hello_to("Everyone");
		
		?>
	

	</body>
</html>