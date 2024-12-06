<?php
	//import database connector
	require_once 'server.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class authenticationModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function loggedin(){
			//prepare the sql
			$sql = "SELECT * FROM `user_tb` WHERE user_email = '{$_POST['email']}' and user_password = '{$_POST['password']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			

			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		function register(){

			$sql = "INSERT INTO `user_tb` (`user_fullname`, `user_email`, `user_password`) 
								VALUE ('{$_POST['name']}','{$_POST['email']}','{$_POST['password']}')";
			$query = $this->conn->prepare($sql);
			

			//execute query
			$query->execute();
			//return
			return true;


		}
	}
?>