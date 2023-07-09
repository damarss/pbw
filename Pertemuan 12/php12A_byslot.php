<?php

require "koneksi.php";
header('Content-type: application/json');

$slot = $_GET['slot'];
$sql = "SELECT * FROM meetings WHERE slot = '$slot';";

try {
	$stmt = $pdo->query($sql)->fetch();

	if ($stmt) {
		$item = array(
			'slot:'=> $stmt["slot"],
			'name:'=> $stmt["name"],
			'email'=>$stmt["email"]
		);

		$response = array(
			'status'=>'200 OK',
			'data'=>$item
		); 

	} else {
		$response = array(
			'status'=>'404 error',
			'message'=>'data not found'
		);
	}
	echo json_encode($response); 

	$pdo = null;
} catch (PDOException  $e) {
	exit("PDO Error: ".$e->getMessage());
}

?>