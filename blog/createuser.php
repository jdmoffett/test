<?php 
	require('models/users.php');
	
	$newuser = new User();
	
	$result = $newuser->createUser($_POST); // This gets passed to the createUser function in the User class 

	if($result) { // 'if' just checks if inside the parentheses it sees true or false (also could be null or not null) 
		echo $newuser->name . " profile has been saved successfully";
	} else{
		echo "failed";
	}

?>