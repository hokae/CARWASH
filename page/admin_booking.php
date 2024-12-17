<?php
	//import model
	include_once '../Booking_Model.php';

	$page_info['page'] = 'booking'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'booking'; //for function to be loaded
		
	//-----------------------//
	//--     --//
	//-----------------------//
	session_start();
	if(!isset($_SESSION['loggedin'])){
		try {//used try to catch unfortunate errors
			//check for active function
			if (isset($_GET['function'])){
				new BookingActive($page_info);
			}else{
				//no active function, use the default page to view
				new Booking($page_info);
			}		
			
		}catch (Throwable $e){ //get the encountered error
			echo '<h1>ERROR 404</h1>';
			echo $e->getMessage();
		}//end of validation
	}else{
		header("Location: ../page/home.php");
	}
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class Booking{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		
		function booking(){ 
			include "../views/booking.php";
		}
	}
	
	//-----------------------//
	//-- Active Class      --//
	//-----------------------//
	class BookingActive{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		
		//-----------------------------------//
		//--  active function start here   --//
		
		
		
		function booking(){//register user
		
			$booking = new authenticationModel();

			$result = $booking->booking($_POST);
			
			if($result){
				echo "<script>alert('REGISTERED SUCCESSFULLY')</script>";
				include '../views/client.php';
			}else{
				echo "<script>alert('REGISTRATION FAILED')</script>";
				include '../views/booking.php';
			}
		
			
		}
	
	}
	
?>