<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Strings</title>
	</head>
	<body>
		<?php

		$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";
		$third = $first;
		$third .= $second;
		echo $third;

		?>

		<br />
		Lowercase: <?php echo strtolower($third); ?><br>
		Uppercase: <?php echo strtoupper($third); ?><br />
		Uppercase first: <?php echo ucfirst($third); ?><br ?>
		Uppercase: words: <?php echo ucwords($third); ?><br />
		<br />
		Length: <?php echo strlen($third); ?><br />
		Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
		Find: <?php echo strstr($third, "brown"); ?><br />
		Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br /> 


	</body>
</html>