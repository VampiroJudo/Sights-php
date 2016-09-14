<?php
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered-By: none of your business");
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Headers</title>
	</head>
	<body>

	<pre>
		<?php
			print_r(headers_list());
		?>
	</pre>
			

	</body>
</html>