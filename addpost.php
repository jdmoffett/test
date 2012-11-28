<html>
<head>
<title>Add Post</title>
</head>
<body>
	<div><h1>Thanks <?php echo $_POST['author']; ?>!</h1></div>

	<?php
		$current_time = date ("Y-m-d H:i:s");
	
		$con = mysql_connect("localhost","user","pass");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("phplearn", $con);
		
		$sql="INSERT INTO posts (title, post, author, timestamp) 
		VALUES ('$_POST[title]','".mysql_real_escape_string($_POST[post])."','$_POST[author]','$current_time' )";
		
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		 echo "Your post has been submitted successfully"; 
		
		mysql_close($con);
	?>

<div><p><a href="blog.php">Click here</a> to see your blog post.</p></div>

</body>
</html>