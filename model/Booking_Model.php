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
		

		function booking(){

			$sql = "INSERT INTO `booking_tb` (`booking_fullname`, `booking_email`, `booking_number`, `booking_date`, `booking_time`) 
								VALUE ('{$_POST['name']}','{$_POST['email']}','{$_POST['number']}','{$_POST['date']}','{$_POST['time']}')";
			$query = $this->conn->prepare($sql);
			

			//execute query
			$query->execute();
			//return
			return true;


		}
	}
?>