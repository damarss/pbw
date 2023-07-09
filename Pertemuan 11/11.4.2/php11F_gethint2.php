<?php

require "koneksi.php";


$keyword = "%".$_GET["keyword"]."%";
$stmt = $pdo->query("SELECT * FROM meetings WHERE name LIKE '$keyword'");
$stmt = $stmt->fetchAll();
// lookup all hints if query result is not empty
if ($stmt) {
	echo json_encode($stmt);
}
else // Output "no suggestion" if no hint was found or output correct values
echo "no suggestion";
$pdo = NULL;

?>