<?php
session_start();
require 'koneksi.php';

$stmt = $pdo->query("select * from akun");

$valid = false;
while ($row = $stmt->fetch()) {
	if ($_POST['username'] == $row['username']) {
		if ($_POST['password'] == $row['password']) {
			$valid = true;
		}
	}
}

if ($valid) {
	$_SESSION['username'] = $_POST['username'];
	header("Location: php10F.php");
} else {
	echo "<script>
		alert('username dan password tidak sesuai');
		document.location.href = 'php10D.php'
	</script>";
}

?>