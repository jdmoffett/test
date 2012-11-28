<html>
<head>
	<title>Create Your User</title>
</head>
<body>

	<div id="title">Create a new User:</div>
		<form action="createuser.php" method="post">
			Name: <input type="text" name="name" /> <br> <!-- value="<?php echo $_SESSION[name]?>" used the session value to show how the update user form would work -->
			E-mail: <input type="text" name="email" /> <br>
			Date Of Birth: <input type="date" name="dob" /> <br>
			Bio: <textarea cols="50" rows="4" name="bio"></textarea> <br>
			Password: <input type="password" name="password" />
			<input type="submit" value="submit"/>
		</form>	
</body>
</html>