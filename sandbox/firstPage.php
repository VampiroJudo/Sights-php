<!DOCTYPE html>
<html>
	<head>
		<title>First Page</title>
	</head>
	<body>

		<?php $link_name = "Second Page"; ?>
		<?php $id = 5; ?>
		<?php $company = "Johnson & Johnson"; ?>
		
		<a href="secondPage.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>

	</body>
</html>