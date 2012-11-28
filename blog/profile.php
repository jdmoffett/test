<?php
	require_once('finduser.php'); //Need to make this into a function
 ?>
<html>
<head>
	<title>Here's your profile info</title>
</head>
<body>
	<div>
		<!-- Add the "If (issset)" function from the find user page, and if it is set, show the profile info. If not, show login link. -->
		<div id="menu"><a href="blog.php">Go To Blog</a> | <a href="newpost.php">Create a new blog post</a> | <a href="editprofile.php">Edit your profile</a></div>
		<h2>Profile info:</h2>
		<p><strong>Your Name:</strong> <?php echo $user['name']; // Is there a better way to display? ?></p>
		<p><strong>Your Email:</strong> <?php echo $user['email']; // Is there a better way to display? ?></p>
		<p><strong>Your Bio:</strong> <br/><?php echo $user['bio']; // Is there a better way to display? ?></p>
		<p><strong>Your Date Of Birth:</strong> <?php echo date("m/d/Y", $user['dob']); // Is there a better way to display? ?></p>
	
		<!-- Github Commit testing -->
		<!-- Git testing 2 -->
		<!-- Commit to asdfasdghasg  Master -->
	</div>
</body>
</html>