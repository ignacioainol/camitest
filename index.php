<?php  
	$arrayDeNotas = json_decode(file_get_contents('data.json'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>camimencannta</title>
</head>
<body>
	<?

		echo "<pre>";
		print_r($arrayDeNotas);
	 ?>
</body>
</html>