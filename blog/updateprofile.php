<?php 
	require('models/users.php');
	
	$updateU = new User();
	
	$result = $updateU->editUser($_POST); // This gets passed to the editUser function in the User class 

	if($result) { // 'if' just checks if inside the parentheses it sees true or false (also could be null or not null) 
		echo $updateU->name . "'s profile has been updated successfully";
	} else{
		echo "failed";
	}

?>