<!DOCTYPE html>
<html lang='en-GB'>
<head>
	<title>PHP09 C</title>
</head>
<body>
	<?php
	echo 'Item: ', $_REQUEST['item'], '<br>';
	echo 'Address: ', $_REQUEST['address'], '<br>';
	?>
	<button onclick="document.location.href = 'php09A.php'">Back</button>
</body>
</html>