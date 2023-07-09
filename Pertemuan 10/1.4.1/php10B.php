<?php
session_start ();
if (isset($_REQUEST['item']))
	$_SESSION['item'] = $_REQUEST['item'];
	$duration = 5;
	
	if (!isset($_SESSION['start'])) {
		$_SESSION['start'] = time();
	}

	if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
	    session_unset();
	    session_destroy();
	    echo "Session is expired.<br/>";
	}
	else {
		echo "Current session exists.<br/>";
	}

?>
<!DOCTYPE html>
<html lang='en-GB'>
<head>
	<title>PHP10B</title>
</head>
<body>
	<form action="php10C.php" method="post">
	<label>Address: <input type="text" name="address"></label>
	<!-- no hidden input required -->
	<input type="submit" value="Send">
	</form>
</body>
</html>