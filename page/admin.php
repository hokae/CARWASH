<?php
	//import model
	include '../model/adminModel.php';

	$page_info['page'] = 'admin'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'admin'; //for function to be loaded
	$page_info['id'] = isset($_GET['id'])? $_GET['id'] : ''; //for function to be loaded

		
	//-----------------------//
	//--     --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new AdminActive($page_info);
		}else{			
			//no active function, use the default page to view
			new Admin($page_info);
		}
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class Admin{
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
		function admin(){
			include '../views/dashboard.php';
		}
		function dashboard(){
			include '../views/dashboard.php';
		}
		function product(){
			include '../views/product.php';
		}
		function sales(){
			include '../views/sales.php';
		}
		function server_services(){
			include '../views/server_services.php';
		}
	}
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class AdminActive{
		//set default page info
		private $page = '';
		private $sub_page = '';
		private $id = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			$this->id = $page_info['id'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		function addProvince(){
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$addProvince = $admin->addProvince($_POST);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		
	}
?>