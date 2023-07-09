<?php
session_start();
if (!isset($_SESSION['username'])){
	echo "<script>alert('Anda harus login terlebih dahulu');
	document.location.href = 'php11D.php';
	</script>";
}
?>
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

		* {
			box-sizing: border-box;
		}

		header {
			display: flex;
			background-color: #000;
			height: 40px;
			align-items: center;
		}

		nav ul {
			list-style-type: none;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		nav a {
			display: block;
			text-decoration: none;
			color: white;
			padding: 0 25px;
			height: 40px;
			line-height: 40px;
		}

		nav a:hover {
			background-color: #C74451;
		}

		.active {
			background-color: #C74451;
		}
	</style>
</head>
<body>
	<?php include('php11F_header.php'); ?>
	<h2>Form Menambahkan Data Meeting</h2>
	<form action="tambah_action.php" method="POST">
		<label><span>Slot: </span><input type="text" name="slot"></label>
		<label><span>Name: </span><input type="text" name="name"></label>
		<label><span>Email: </span><input type="text" name="email"></label>
		<button>Tambah</button>
	</form>
	<br>
	<a href="php11F.php">Kembali</a>
</body>
</html>