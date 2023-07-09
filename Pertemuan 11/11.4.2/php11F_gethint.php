<?php

require "koneksi.php";


$keyword = "%".$_GET["keyword"]."%";
$stmt = $pdo->query("SELECT * FROM meetings WHERE name LIKE '$keyword'");
// lookup all hints if query result is not empty
$hint = "";
if ($stmt) {
	foreach($stmt as $row) {
		if ($hint === "") {
			$hint = $row["name"];
		} else {
			$hint .= "," .$row["name"];
		}
	}
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
$pdo = NULL;

?>