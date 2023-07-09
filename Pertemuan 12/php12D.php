<?php

require "koneksi.php";
parse_str(file_get_contents("php://input"),$_DELETE);
header('Content-type: application/json');

$slot = $_DELETE['slot'];

$sql = "DELETE FROM `meetings` 
		WHERE `slot` = '$slot'";

try {
	$stmt = $pdo->exec($sql);

	if ($stmt) {
		$msg = "Data berhasil dihapus.";
	} else{
		$msg = "Gagal.";
	}

	$response = array(
		'status'=>'201 Deleted',
		'message'=>$msg
	);

	echo json_encode($response);
	
	$pdo = null;
} catch (PDOException  $e) {
	exit("PDO Error: ".$e->getMessage());
}

?>