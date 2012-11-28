<html>
<head>
	<title>Create Your User</title>
</head>
<body>
	<div id="title">Create a new User:</div>
		<form action="users.php" method="post">
			Name: <input type="text" name="name" /> <br>
			E-mail: <input type="number" name="age" /> <br>
			Date Of Birth: <input type="date" name="dob" /> <br>
			Bio: <textarea cols="50" rows="4" name="bio"></textarea> <br>
			Password: <input type="password" name="password" />
			<input type="submit" />
		</form>	
</body>
</html>