<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data</title>
	<?php require "koneksi.php"; ?>
	<style>
		label {
			display: block;
			margin-bottom: 5px;
			display: grid;
			grid-template-columns: 50px 200px;
		}
	</style>
</head>
<body>
	<h2>Form Menambahkan Data Meeting</h2>
	<form action="php09E_action.php" method="POST">
		<label><span>Slot: </span><input type="text" name="slot"></label>
		<label><span>Name: </span><input type="text" name="name"></label>
		<label><span>Email: </span><input type="text" name="email"></label>
		<button>Tambah</button>
	</form>
</body>
</html>