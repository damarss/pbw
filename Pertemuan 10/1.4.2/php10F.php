<?php 
session_start();
if (!isset($_SESSION['username'])){
	echo "<script>alert('Anda harus login terlebih dahulu');
	document.location.href = 'php10D.php';
	</script>";
}
require('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP10F</title>
	<style>
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

		table {
			border-collapse: collapse;
		}

		td {
			padding: 5px 25px;
		}
	</style>
</head>
<body>
	<?php include('php10F_header.php');?>
	<h1>Data Meeting</h1>
	<?php
		$stmt = $pdo->query("select * from meetings");
		echo "<table border='1'>
			<tr>
				<th>Slot</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>";
		while ($row = $stmt->fetch()) {
			echo '<tr>
					<td>'.$row["slot"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>
					<td>
						<a href="edit.php?slot='.$row['slot'].'">Edit</a>
						<a href="hapus.php?slot='.$row['slot'].'">Hapus</a>
					</td>
				  </tr>
				';
		}
		echo "</table>";
	?>
	<br>
	<button onclick="document.location.href = 'tambah.php';">Tambah</button>
</body>
</html>