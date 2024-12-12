<?php
	//import model
	include_once '../model/addbookingsmodel.php';

	$page_info['page'] = 'add_carwashbookings'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'add_carwashbookings'; //for function to be loaded
		
	//-----------------------//
	//--  validate contact  --//
	//-----------------------//
		try {//used try to catch unfortunate errors
		//check for active function
		
		//no active function, use the default page to view
		if(isset($_GET['function'])){
			
			new Add_CarwashBookingsActive($page_info);
		}else{

			new Add_CarwashBookings($page_info);
		}
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class Add_CarwashBookings{
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
		function add_carwashbookings(){
			$admin = new BookingModel();

			$services = $admin->get_service();

			include '../views/server_services.php';
		}

	}

	class Add_CarwashBookingsActive{
		

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
	function add_carwashbookings(){
		$admin = new BookingModel();

		
		$services = $admin->get_service();
		include '../views/server_services.php';
		}

	function addService(){

		$admin = new BookingModel();

		$service = $admin->add_Service($_POST,$_FILES);

		$services = $admin->get_service();

		
		include '../views/server_services.php';
	}


	function services_delete(){

		$admin = new BookingModel();

		$delete_service = $admin->service_delete($_GET);

		$services = $admin->get_service();

		include '../views/server_services.php';
	}

}

	function services_update(){

	$admin = new BookingModel();

	$update_service = $admin->service_update($_GET);

	$services = $admin->get_service();

	include '../views/server_services.php';
}
 
function services(){
	$admin = new BookingModel();
	$services = $admin->get_service();

	
	include '../views/server_services.php';
}



		

	
	
?>