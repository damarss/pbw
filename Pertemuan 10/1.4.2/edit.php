<?php
session_start();
if (!isset($_SESSION['username'])){
	echo "<script>alert('Anda harus login terlebih dahulu');
	document.location.href = 'php10D.php';
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
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
	<h2>Form Edit Data Meeting</h2>
	<?php
		$slot = $_GET['slot'];
		$data = $pdo->query("SELECT * FROM meetings WHERE slot = $slot");
		$data = $data->fetch();
	?>
	<form action="edit_action.php?slot=<?php echo $slot ?>" method="POST">
		<label><span>Slot: </span><input type="text" name="slot" value="<?php echo $data['slot']; ?>"></label>
		<label><span>Name: </span><input type="text" name="name" value="<?php echo $data['name']; ?>"></label>
		<label><span>Email: </span><input type="text" name="email" value="<?php echo $data['email']; ?>"></label>
		<button>Edit</button>
	</form>
</body>
</html>