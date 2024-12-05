<?php
	//import database connector
	require_once '../model/server.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class authenticationModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function authenticaLogin(){
			//prepare the sql
			$sql = "SELECT * FROM `user_tb` WHERE user_email = '{$_POST['email']}' and user_password = '{$_POST['password']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
		
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		function register(){
			try{
				$sql = "INSERT INTO `user_tb` (`user_name`, `user_email`, `user_password`) VALUE ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')";

				$query = $this->conn->prepare($sql);
	
	
				$query->execute();
	
				return true;
			} catch(Throwable $e){
				$e->getMessage();

				return false;

			}
			


		}
	}
?>