<?php

require "koneksi.php";
parse_str(file_get_contents("php://input"),$_PUT);
header('Content-type: application/json');

$slot = $_PUT['slot'];
$name = $_PUT['name'];
$email = $_PUT['email'];

$sql = "UPDATE `meetings` 
		SET `name` = '$name', `email` = '$email'
		WHERE `slot` = '$slot'";

try {
	$stmt = $pdo->exec($sql);

	if ($stmt) {
		$msg = "Data berhasil diupdate.";
	} else{
		$msg = "Gagal.";
	}

	$response = array(
		'status'=>'201 Updated',
		'message'=>$msg
	);
	
	echo json_encode($response);
	
	$pdo = null;
} catch (PDOException  $e) {
	exit("PDO Error: ".$e->getMessage());
}

?>