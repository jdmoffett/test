<?php
	require_once('dbconnect.php');
	
	class User {
		
		private $db;
		public $id;
		public $name;
		public $email;
		public $dob; // Date of Birth
		public $bio; // User's personal bio
		public $role; // The user's role
		public $joindate; // The date the user joined
		// Passwords are like a black hole - only in, not out. Won't ever show.
		
		function __construct() { //Instantiates DB connection when the class is instantiated
			$this->db = new Database();	
		}
		
		function createUser($userdata) {
			
			$sql="INSERT INTO users (name, email, dob, bio, password)
			VALUES ('$userdata[name]','$userdata[email]','$userdata[dob]','".mysql_real_escape_string($userdata['bio'])."', '" . md5($userdata['password'])."')";
		
			if (!mysql_query($sql,$this->db->con))  { // Runs the sql query from above
			  return false;
			  } 
			
			$this->name=$userdata['name']; // '$this' Accesses variables and function names within the same class
			$this->email=$userdata['email'];
			$this->dob=$userdata['dob'];
			$this->bio=$userdata['bio'];
			
			return true; // Returns true if the action succeeds
		}
		
		static function emailTo($email) {
			$db = new Database();	
			$sql="SELECT id FROM users WHERE email='$email'";
			
			$result=mysql_query($sql,$db->con); // gives you the data in a "resource"
			if (!$result)  {
			  return false;
			} else {
				$row=mysql_fetch_assoc($result); // Ask Jonathan how to get the result not in an Array
				return $row['id'];
			}
		}	
		
		static function findUser($id) {
			$db = new Database();	
			$sql="SELECT * FROM users WHERE id='$id'";
			
			$result=mysql_query($sql,$db->con); // gives you the data in a "resource"
			if (!$result)  {
			  return false;
			} else {
				$row=mysql_fetch_assoc($result); // takes the resource given and creates an associative array out of it (all the data in that table defined by the database headers).
				$row['dob']=strtotime($row['dob']);
				return $row;
			}
		}
		
		// create login and store that in the SESSION so it persists 
		// build a function to find users by email and pass (make static)
		
		function editUser($userdata) {
			$id = $userdata['id'];
		
			$sql="UPDATE users 
					SET name='$userdata[name]',email='$userdata[email]',dob='$userdata[dob]',bio='".mysql_real_escape_string($userdata['bio'])."'
					WHERE id='$id'";
		
			if (!mysql_query($sql,$this->db->con))  {
			  return false;
		  	}
		  	
		  	$this->name=$userdata['name'];
		  	
		  	return true;
		}
		
		function editPassword($editpass) {
			$sql="UPDATE users SET password='" . md5($editpass['password'])."'";
		
			if (!mysql_query($sql,$this->db->con))  {
			  return false;
			}

		}
	}

?>