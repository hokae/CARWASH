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
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function register($post){//register
		    $query = "INSERT INTO `user_tb`(`user_fullname`, `user_email`, `user_password`) 
									VALUES (:fullname, :email, :password)";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':name', $post['name']);
			$stmt->bindParam(':email', $post['email']);
			$stmt->bindParam(':password', $post['password']);
			$stmt->execute();
		}
	}
?>