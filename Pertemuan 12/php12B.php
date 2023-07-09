<?php

require "koneksi.php";
header('Content-type: application/json');

$slot = $_POST['slot'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO `meetings` (`slot`, `name`, `email`) VALUES
		('$slot', ' $name', '$email')";

try {
	$stmt = $pdo->query($sql);

	if ($stmt) {
		$msg = "Data berhasil ditambahkan.";
	} else{
		$msg = "Gagal.";
	}

	$response = array(
		'status'=>'201 Created',
		'message'=>$msg
	);

	echo json_encode($response);
	
	$pdo = null;
} catch (PDOException  $e) {
	exit("PDO Error: ".$e->getMessage());
}

?>