<?php
	//import model
	include_once '../model/authenticationModel.php';

	$page_info['page'] = 'login'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'login'; //for function to be loaded
		
	//-----------------------//
	//--     --//
	//-----------------------//
	
	if(isset($_POST)){
		try {//used try to catch unfortunate errors
			//check for active function
			if (isset($_GET['function'])){
				new LoginActive($page_info);
			}else{
				//no active function, use the default page to view
				new Login($page_info);
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
	class Login{
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
		function login(){
			include '../views/login.php';
		}
        function register(){
			include '../views/register.php';
		}
	}
	
	//-----------------------//
	//-- Active Class      --//
	//-----------------------//
	class LoginActive{
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
		//--   function start here   --// */
		function authenticaLoginlogin(){
			//stanciation
			$authentication = new authenticationModel();
			
			//authenticat login
			$login = $authentication->authenticaLogin($_POST);
			
			//check if login success
			if ($login){
				if($login['user_type'] == 'admin'){

					header('location:../page/admin.php');
				}
			}else{
				$msg = "Invalid Username or Password!";
				include '../views/login.php';
			}
		}
        function authenticaLogin(){
			//stanciation
			$authentication = new authenticationModel();
			
			//authenticat login
			$login = $authentication->authenticaLogin($_POST);
			
			//check if login success
			if ($login){
				if($login['user_type'] == 'user'){

					header('location:../page/home.php');
				}
			}else{
				$msg = "Invalid Username or Password!";
				include '../views/login.php';
			}
		}
        function register(){
			//stanciation
			$authentication = new authenticationModel();
			
			//authenticat login
			$register = $authentication->register($_POST);
			
			//check if login success
			if ($register){
				if($register['user_type'] == 'user'){
					header('location:../page/home.php');
				}
			}else{
				$msg = "Invalid Username or Password!";
				include '../views/register.php';
			}
		}
	}
?>