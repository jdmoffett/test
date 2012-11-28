<html>
<head>
	<title>Welcome to my blog</title>
</head>

<body>
	<?php
		$con = mysql_connect("localhost","user","pass");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("phplearn", $con);
		
		
		$result = mysql_query("SELECT * FROM posts ORDER BY timestamp DESC");
		
		while($row = mysql_fetch_array($result))
		  {
		  $time = strtotime($row['timestamp']);
		  		  
		  echo "<h2>" . $row['title'] . "</h2>";
		  echo "<p><strong>Posted by:</strong> " . $row['author'] . " <strong>on</strong> " . date("m/d/y", $time) . " at " . date("g:i a", $time) . "</p>";
		  echo "<p><strong>Post:</strong></br>" . nl2br($row['post']) . "</p>";
		  echo "<hr>";
		  }
		
		mysql_close($con);
	?>

</body>
</html>