<!DOCTYPE html> <html lang='en-GB'>
<head>
	<title>PHP09 D</title>
	<style>
		table * {
			border: 1px solid black;
		}

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
	<h1>PHP and Databases</h1>
	<?php
	$db_hostname = "localhost"; // Write your own db server here
	$db_database = "PBW"; // Write your own db name here
	$db_username = "root"; // Write your own username here
	$db_password = ""; // Write your own password here
	// For the best practice, don’t	use your “real” password when your work
	$db_charset = "utf8mb4"; // Optional
	$dsn =
		"mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
		$opt = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false
		);
	try {
		$pdo = new PDO($dsn,$db_username,$db_password,$opt);
		echo "<h2>Data in meeting table (While loop)</h2>\n";

		echo "<h3>Sort by Slot Ascending</h3>";
		$stmt = $pdo->query("select * from meetings order by slot");
		echo "Rows retrieved: ".$stmt->rowcount()."<br><br>\n";
		echo "<table>
			<tr>
				<th>Slot</th>
				<th>Name</th>
				<th>Email</th>
			</tr>";
		while ($row = $stmt->fetch()) {
			echo '<tr>
					<td>'.$row["slot"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>
				  </tr>
				';
		}
		echo "</table>";

		echo "<h3>Sort by Slot Descending</h3>";
		$stmt = $pdo->query("select * from meetings order by slot desc");
		echo "<table>
			<tr>
				<th>Slot</th>
				<th>Name</th>
				<th>Email</th>
			</tr>";
		while ($row = $stmt->fetch()) {
			echo '<tr>
					<td>'.$row["slot"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>
				  </tr>
				';
		}
		echo "</table>";

		echo "<h2>Data in meeting table (Foreach loop)</h2>\n";

		echo "<h3>Sort by Slot Ascending</h3>";
		$stmt = $pdo->query("select * from meetings order by slot");
		echo "<table>
			<tr>
				<th>Slot</th>
				<th>Name</th>
				<th>Email</th>
			</tr>";
		foreach($stmt as $row) {
			echo '<tr>
					<td>'.$row["slot"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>
				  </tr>
				';
		}
		echo "</table>";

		echo "<h3>Sort by Slot Descending</h3>";
		$stmt = $pdo->query("select * from meetings order by slot desc");
		echo "<table>
			<tr>
				<th>Slot</th>
				<th>Name</th>
				<th>Email</th>
			</tr>";
		foreach($stmt as $row) {
			echo '<tr>
					<td>'.$row["slot"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>
				  </tr>
				';
		}
		echo "</table>";
		$pdo = NULL;
	}
	catch (PDOException $e) {
		exit("PDO Error: ".$e->getMessage()."<br>");
	}
	?>
</body>
</html>