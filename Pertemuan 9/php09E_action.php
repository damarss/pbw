<?php
	require "koneksi.php";
	$slot = $_POST['slot'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$statement = "INSERT INTO meetings(slot,name,email)
		VALUES('$slot', '$name', '$email');
	";
	$pdo->exec($statement);
	echo "<script>alert('Berhasil ditambahkan');
	document.location.href = 'php09E.php';
	</script>";
?>