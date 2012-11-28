<?php
	require_once('models/users.php');
	session_start();
	
	if (isset($_SESSION['id'])) {
		$user = User::findUser($_SESSION['id']); // call static methods with :: instead of ->	
		//add user's data into session to make more efficient
	}
	
	if ($_SERVER['REQUEST_URI'] != '/login.php') {
		$_SESSION['referrer']=$_SERVER['REQUEST_URI'];
	}

/*
	$idarray = User::emailTo($_SESSION['email']); // call static methods with :: instead of ->
	
	$id = $idarray['id']; //Ask Jonathan how to get the result not in an array
*/
	


?>