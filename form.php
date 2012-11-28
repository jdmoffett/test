<?php session_start(); ?>

<html>
<head>
<title>Form Page</title>
</head>
<body>
	<?php
		$con = mysql_connect("localhost","user","pass");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("phplearn", $con);

		$query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password']."'";
		
		$results = mysql_query($query); 
		
		while($row = mysql_fetch_array($results)) {
			echo "You are " . $row['name'];
			$_SESSION['user_id'] = $row['id'];
		}
?>

</body>
</html>