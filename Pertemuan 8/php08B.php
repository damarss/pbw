<!DOCTYPE html>
<html lang=’en-GB’>
<head>
	<title>PHP 08B</title>
	<meta name="author" content="Damar Septia Nugraha, 222011829@stis.ac.id">
	<meta name="copyright" content="Damar Septia Nugraha">
	<meta name="date" content="Apr. 21, 2022">
</head>
<body>
	<h1>Hello World</h1>
	<?php
	error_reporting( E_ALL );
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	echo "<h2>Types and Type Casting</h2>\n";
	$mode = rand(1,4);
	if ($mode == 1)
		$randvar = rand();
	elseif ($mode == 2)
		$randvar = (string) rand();
	elseif ($mode == 3)
		$randvar = rand()/(rand()+1);
	else
		$randvar = (bool) $mode;
	echo "Random scalar: $randvar<br>\n";
	
	if (is_int($randvar))
		echo "<p>i. This is an integer</p>";
	elseif (is_float($randvar))
		echo "<p>ii. This is a floating-point number</p>";
	elseif (is_string($randvar))
		echo "<p>iii. This is a string</p>";
	else {
		echo "<p>iv. I don't know what this is</p>";
	}
	?>
</body>
</html>