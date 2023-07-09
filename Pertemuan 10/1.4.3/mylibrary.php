<?php session_start();
function destroy_session_and_data() {
	session_unset();
	if (session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), session_id(),	time()-2592000, '/PBW10/1.4.3');
	setcookie('request', 1, time() - 3600, '/PBW10/1.4.3');
	session_destroy();
}

function count_requests() {
	// if (!isset($_SESSION['requests']))
	// 	$_SESSION['requests'] = 1;
	// else $_SESSION['requests']++;
	// return $_SESSION['requests'];

	if (isset($_COOKIE['request'])) {
		setcookie('request', $_COOKIE['request'] + 1, time() + 5, '/PBW10/1.4.3');
	}	
	else setcookie('request', 1, time() + 5, '/PBW10/1.4.3');
	return $_COOKIE['request'];
} 
?>