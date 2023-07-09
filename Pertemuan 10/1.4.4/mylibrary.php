<?php session_start();
require '../1.4.2/koneksi.php';
function destroy_session_and_data() {
	session_unset();
	if (session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), session_id(),	time()-2592000, '/PBW10/1.4.3');
	setcookie('request', 1, time() - 3600, '/PBW10/1.4.3');
	session_destroy();
}

function count_requests() {
	$stmt = $pdo->query("select * from global");
	$counter = $stmt->fetch();
	return $counter['counter'];
} 
?>