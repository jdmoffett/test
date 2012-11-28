<?php	
	require_once('models/users.php');
		
	$email = $_POST['email'];
	$pwd = md5($_POST['password']);
	
	/* print_r($email); */
	
	$db = new Database();
	
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$pwd'";
	
	$result = mysql_query($sql,$db->con);

	if (!$result) {
		echo "We've experienced an error and your login was unsuccessful. Please try Logging in again <a href=\"login.php\">here</a>.";
	}	elseif (mysql_num_rows($result) == 0) {
		
			echo "
			<h1> Access Denied </h1>
			<p>Your login info is incorrect. Try Logging in again 
			<a href=\"login.php\">here</a>.";
		}	
		
		else {
			session_start();
						
			while($row=mysql_fetch_assoc($result)){
				$_SESSION['id']=$row['id'];
			}
			
			header('Location: '. $_SESSION['referrer']);
		}

?>