<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP09 F</title>
	<?php require "koneksi.php" ?>
	<style>
		table {
			border-collapse: collapse;
		}

		td {
			padding: 0 25px;
		}

		th {
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<h2>Data Meeting</h2>
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
						<a href="php09G.php?slot='.$row['slot'].'">Edit</a>
						<a href="php09H.php?slot='.$row['slot'].'">Hapus</a>
					</td>
				  </tr>
				';
		}
	?>
</body>
</html>