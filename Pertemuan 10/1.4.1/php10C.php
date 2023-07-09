<?php
session_start ();
// not necessary but convenient
if (isset($_REQUEST['address']))
$_SESSION['address'] = $_REQUEST['address'];
?>
<!DOCTYPE html>
<html lang='en-GB'>
<head>
	<title>PHP10C</title>
</head>
<body>
<?php
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
	    session_unset();
	    session_destroy();
	    echo "Session is expired.<br/>";
} else {
	echo "Current session exists.<br/>";
}
echo $_SESSION['item'] , "<br>";
echo $_SESSION['address'];
// Once we do not need the data anymore , get rid of it
// session_unset();
// session_destroy();
?>
</body>
</html>