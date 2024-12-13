<?php
	//import database connector
	require_once 'server.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class AdminModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function addProvince($post){
			//prepare the sql
			$sql = "INSERT INTO `province_tb`(`prov_name`) 
									  VALUES ('{$post['name']}')";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		
		function getProvince(){
			//prepare the sql
			$sql = "SELECT * FROM province_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function updateProv(){
		
			$sql = "UPDATE `province_tb` SET `prov_name` = '{$_POST['prov_name']}' WHERE `prov_id` = '{$_GET['id']}';";

			$query = $this->conn->prepare($sql);

			$query->execute();

			return true;
			
		}
		
		function deleteProvince($get){
			//prepare the sql
			$sql = "DELETE FROM province_tb WHERE prov_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getMunicipality(){
			//prepare the sql
			$sql = "SELECT * FROM municipality_tb JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addMunicipality($post){
			//prepare the sql
			$sql = "INSERT INTO `municipality_tb`(`mncp_prov_id`, mncp_name) 
									  VALUES ('{$post['prov_id']}', '{$post['name']}')";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		
		function deleteMunicipality($get){
			//prepare the sql
			$sql = "DELETE FROM municipality_tb WHERE mncp_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getBarangay(){
			//prepare the sql
			$sql = "SELECT * FROM barangay_tb JOIN municipality_tb ON mncp_id = brgy_mncp_id JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteBarangay($get){
			//prepare the sql
			$sql = "DELETE FROM barangay_tb WHERE brgy_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addBarangay($post){
			//prepare the sql
			$sql = "INSERT INTO barangay_tb SET brgy_mncp_id = '{$post['mncp_id']}', brgy_name = '{$post['name']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
        function addTourDest($post, $file){
			//image location
			$target_dir = "../images/";
			$target_file = $target_dir . basename($file["logo1"]["name"]);
			$filename = basename($file["logo1"]["name"]);
			
			$imageFileType = ['jpg','jpeg','png','svg','gif', 'JPG', 'webp'];
			
			//check te file if it is an image
			$extension = pathinfo($file["logo1"]["name"], PATHINFO_EXTENSION);
			
			//check if the image is on the list of images formats
			if (in_array($extension , $imageFileType)){
				
				//upload the correct image
				if (move_uploaded_file($file["logo1"]["tmp_name"], $target_file)) {
					//pre sql statement
					$sql = "INSERT INTO destinations_tb (dstn_brgy_id, dstn_name, dstn_desc, dstn_logo) 
										VALUES (?, ?, ?, ?)";
					//prepare query
					$query = $this->conn->prepare($sql);
					$query->bindParam(1, $post['brgy_id']);
					$query->bindParam(2, $post['dstn_name']);
					$query->bindParam(3, $post['desc']);
					$query->bindParam(4, $filename);
					//execute query
					$query->execute();
					//return
					return $query->fetch(PDO::FETCH_ASSOC);
					
				}
				else{
					?>
						<script>alert('There was an error on file upload!');</script>
						<script>window.history.back(-1);</script>
					<?php
				}
			}else{
				?>
					<script>alert('Invalid File Format.\r\nFormat: jpg,jpeg,png,svg,gif');</script>
					<script>window.history.back(-1);</script>
				<?php
			}
			
		}
		
		function getDestination(){
			//prepare the sql
			$sql = "SELECT * FROM destinations_tb 
								  JOIN barangay_tb ON brgy_id = dstn_brgy_id 
								  JOIN municipality_tb ON mncp_id = brgy_mncp_id 
								  JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteDest($get){
			//prepare the sql
			$sql = "DELETE FROM  services_tb WHERE services_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function contact(){
			//prepare the sql
			$sql = "SELECT * FROM contact_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>