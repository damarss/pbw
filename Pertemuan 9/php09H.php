<?php
	require "koneksi.php";
	$slot = $_GET['slot'];

	$statement = "DELETE FROM meetings WHERE slot = $slot;";
	$pdo->exec($statement);
	echo "<script>alert('Berhasil dihapus');
	document.location.href = 'php09F.php';
	</script>";
?>