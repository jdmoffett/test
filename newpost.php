<html>
<head>
	<title>Create Your Post</title>
</head>
<body>
	<div id="title"><h2>Create a new blog post:</h2></div>
		<form action="addpost.php" method="post">
			<p>Who is the author for this post:
			<select name="author">
				<?php
					$con = mysql_connect("localhost","user","pass");
					if (!$con) {
					  die('Could not connect: ' . mysql_error());
					  }
					
					mysql_select_db("phplearn", $con);
					
					$result = mysql_query("SELECT * FROM authors");
					
					while($row = mysql_fetch_array($result))
					  {
					  echo "<option>" . $row['name'] . "</option>";
					  }
					
					mysql_close($con);
				?>
			</select></p>
			<p>Title: <input type="text" name="title" /></p>
			<p style="vertical-align:top;">Post: <textarea rows="30" cols="50" name="post"></textarea></p>
			<input type="submit" />
		</form>	
</body>
</html>