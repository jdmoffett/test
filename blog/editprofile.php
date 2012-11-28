<?php session_start();
	require_once('finduser.php'); //Need to put this into a function
 ?>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<div>
		<div id="menu"><a href="blog.php">Go To Blog</a> | <a href="newpost.php">Create a new blog post</a> | <a href="profile.php">View your profile</a></div>
		<h2>Profile info:</h2>
		<form action="updateprofile.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<p><strong>Your Name:</strong> <input type="text" name="name" value="<?php echo $name; ?>"/></p>
			<p><strong>Your Email:</strong> <input type="text" name="email" value="<?php echo $email; ?>"/></p>
			<p><strong>Your Bio:</strong> <br/><textarea cols="50" rows="4" type="text" name="bio"><?php echo $bio; ?></textarea></p>
			<p><strong>Your Date Of Birth:</strong> <input type="text" name="dob" value="<?php echo date("m/d/Y", $dob); ?>"/></p>
			<input type="submit" value="submit"/>
		</form>
	</div>
</body>
</html>