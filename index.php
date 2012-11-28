<?php session_start(); ?>

<html>
<head>
<title>Test Page</title>
</head>
<body>
	<? echo $_SESSION['id'] ?>

	<form action="form.php" method="post">
	Email: <input type="text" name="email" /> <br>
	Password: <input type="password" name="password" /> <br>
	<input type="submit" />
	</form>	
</body>
</html>