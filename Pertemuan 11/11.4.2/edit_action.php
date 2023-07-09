<?php
	require 'koneksi.php';
	$slot = $_POST['slot'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$slot_bf = $_GET['slot'];
	$statement = "UPDATE meetings
		SET slot = '$slot', name = '$name', email = '$email'
		WHERE slot = $slot_bf;
	";
	$pdo->exec($statement);
	echo "<script>alert('Berhasil diedit');
	document.location.href = 'php11F.php';
	</script>";
?>