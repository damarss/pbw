<?php

require "koneksi.php";
header('Content-type: application/json');

$sql = "SELECT * FROM meetings;";

try {
	$stmt = $pdo->query($sql)->fetchAll();

	if ($stmt) {
		foreach ($stmt as $row) {
			$item[] = array(
				'slot:'=> $row["slot"],
				'name:'=> $row["name"],
				'email'=>$row["email"]
			);
		}
	}
	$response = array(
		'status'=>'200 OK',
		'data'=>$item
	);

	echo json_encode($response);

	$pdo = null;
} catch (PDOException $e) {
	exit("PDO Error: ".$e->getMessage());
}

?>