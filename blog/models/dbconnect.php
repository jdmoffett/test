<?php

	class Database {
		public $con;
		
		function __construct() { // Constructs run as soon as the class is instantiated
			$this->con = mysql_connect("localhost","user","pass");
			if (!$this->con) {
			 	return('Could not connect: ' . mysql_error());
			 } else {
				mysql_select_db("phplearn", $this->con);
				return true;			  		
			 }
		}
	}
?>