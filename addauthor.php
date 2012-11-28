<html>
<head>
<title>Add Author</title>
</head>
<body>
	<div><h1>Thanks <?php echo $_POST['name']; ?>!</h1></div>

	<?php
		$con = mysql_connect("localhost","user","pass");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("phplearn", $con);
		
		$sql="INSERT INTO authors (name, age, dob, bio, password) 
		VALUES ('$_POST[name]','$_POST[age]','$_POST[dob]','".mysql_real_escape_string($_POST['bio'])."', '" . md5($_POST['password'])."')";
		
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		 echo "Your profile has been saved succesfully"; 
		
		mysql_close($con);
	?>

<div><p><a href="newpost.php">Click here</a> to enter your first blog post.</p></div>

</body>
</html>