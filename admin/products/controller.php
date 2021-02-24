<?php
require_once ("../../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

	case 'banner' :
	setBanner();
	break;

 case 'discount' :
	setDiscount();
	break;
	}

   
function doInsert(){
	if(isset($_POST['save'])){
		
	 

			$errofile1 = $_FILES['image1']['error'];
			$type1 = $_FILES['image1']['type'];
			$temp1 = $_FILES['image1']['tmp_name'];
			$myfile1 =$_FILES['image1']['name'];
		 	$location1="uploaded_photos/".$myfile1;
			move_uploaded_file($temp1,"uploaded_photos/" . $myfile1);
			
			$errofile2 = $_FILES['image2']['error'];
			$type2 = $_FILES['image2']['type'];
			$temp2 = $_FILES['image2']['tmp_name'];
			$myfile2 =$_FILES['image2']['name'];
		 	$location2="uploaded_photos/".$myfile2;
			move_uploaded_file($temp2,"uploaded_photos/" . $myfile2);
			
			$errofile3 = $_FILES['image3']['error'];
			$type3 = $_FILES['image3']['type'];
			$temp3 = $_FILES['image3']['tmp_name'];
			$myfile3 =$_FILES['image3']['name'];
		 	$location3="uploaded_photos/".$myfile3;
			move_uploaded_file($temp3,"uploaded_photos/" . $myfile3);
			
			
					
		 	
					if ($_POST['PRODESC'] == "" OR $_POST['PROPRICE'] == "" OR $_POST['OWNERNAME'] == "" OR $_POST['PRODUCTNAME'] == "" OR
					$_POST['ABOUTPRODUCT1'] == "" OR $_POST['ABOUTPRODUCT2'] == "" OR $_POST['ABOUTPRODUCT3'] == "" OR $_POST['SPECIFICATION'] == "" OR
					$_POST['location'] == "" OR $_POST['payment'] == "" OR $_POST['OWNERPHONE'] == ""  ) {
					$messageStats = false;
					message("All fields are required!","error");
					redirect('index.php?view=add');
					}else{	

			 
						$autonumber = New Autonumber();
						$res = $autonumber->set_autonumber('PROID');

  				 	 	


  				 	 	$product = New Product(); 
  				 	 	$product->PROID 		= $res->AUTO; 
						$product->OWNERNAME 		= $_POST['OWNERNAME']; 
						$product->ProductName 		= $_POST['PRODUCTNAME'];
						$product->AboutProduct1 		= $_POST['ABOUTPRODUCT1'];
						$product->AboutProduct2 		= $_POST['ABOUTPRODUCT2'];
						$product->AboutProduct3 		= $_POST['ABOUTPRODUCT3'];
						$product->Specification 	= $_POST['SPECIFICATION'];
						$product->State 		= $_POST['location']; 
						$product->Payment 		= $_POST['payment']; 
						$product->OWNERPHONE 		= $_POST['OWNERPHONE'];
						$product->image1 		= $location1; 
						$product->image2 		= $location2; 
						$product->image3 		= $location3; 
						$product->PRODESC 		= $_POST['PRODESC'];
						$product->CATEGID	    = $_POST['CATEGORY'];
						$product->PROQTY		= $_POST['PROQTY'];
						$product->PROPRICE		= $_POST['PROPRICE']; 
						$product->PROSTATS		= 'Available';
						$product->create();
						// }

 

						$promo = New Promo();  
						$promo->PROID		= $res->AUTO;  
						$promo->PRODISPRICE	= $_POST['PROPRICE'];     
						$promo->create();
  					 

						$autonumber = New Autonumber();
						$autonumber->auto_update('PROID');



						message("New Product created successfully!", "success");
						redirect("index.php");
						}
							
					
			}
			 
		  }


	  
 
 
	function doEdit(){
		if (@$_GET['stats']=='NotAvailable'){
			$product = New Product();
			$product->PROSTATS	= 'Available';
			$product->update(@$_GET['id']);

		}elseif(@$_GET['stats']=='Available'){
			$product = New Product();
			$product->PROSTATS	= 'NotAvailable';
			$product->update(@$_GET['id']);
		}else{

		if (isset($_GET['front'])){
			$product = New Product();
			$product->FRONTPAGE	= True;
			$product->update(@$_GET['id']);

		}
	}



		if(isset($_POST['save'])){
 
						$product = New Product();
					
						$product->OWNERNAME 		= $_POST['OWNERNAME']; 
						$product->BrandName 		= $_POST['BRANDNAME'];
						$product->AboutBrand 		= $_POST['ABOUTBRAND'];
						$product->ProductName 		= $_POST['PRODUCTNAME'];
						$product->AboutProduct1 		= $_POST['ABOUTPRODUCT1'];
						$product->AboutProduct2 		= $_POST['ABOUTPRODUCT2'];
						$product->AboutProduct3 		= $_POST['ABOUTPRODUCT3'];
						$product->Specification 	= $_POST['SPECIFICATION'];
						$product->OWNERPHONE 		= $_POST['OWNERPHONE'];
						
						$product->PRODESC 		= $_POST['PRODESC'];
						$product->CATEGID	    = $_POST['CATEGORY'];
						$product->PROQTY		= $_POST['PROQTY'];
						$product->ORIGINALPRICE	= $_POST['ORIGINALPRICE']; 
						$product->PROPRICE		= $_POST['PROPRICE']; 
						
						// $product->PROMODEL 		= $_POST['PROMODEL']; 
						// $product->PRONAME 		= $_POST['PRONAME']; 

						$product->update($_POST['PROID']);
  

			message("Product has been updated!", "success");
			redirect("index.php");
	  }
	redirect("index.php"); 
}

	function doDelete(){

 
 

		if (isset($_POST['selector'])==''){
			message("Select the records first before you delete!","error");
			redirect('index.php');
			}else{

			$id = $_POST['selector'];
			$key = count($id);

			for($i=0;$i<$key;$i++){ 

			$product = New Product();
			$product->delete($id[$i]);
 

			$stockin = New StockIn();
			$stockin->delete($id[$i]);

			$promo = New Promo();   
			$promo->delete($id[$i]);

			message("Product has been Deleted!","info");
			redirect('index.php');

			}
		}

	}
		 
	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="uploaded_photos/".$myfile;
			move_uploaded_file($temp,"uploaded_photos/" . $myfile);
			
			$errofile1 = $_FILES['photo1']['error'];
			$type1 = $_FILES['photo1']['type'];
			$temp1 = $_FILES['photo1']['tmp_name'];
			$myfile1 =$_FILES['photo1']['name'];
		 	$location1="uploaded_photos/".$myfile1;
			move_uploaded_file($temp1,"uploaded_photos/" . $myfile1);
			
			$errofile2 = $_FILES['photo2']['error'];
			$type2 = $_FILES['photo2']['type'];
			$temp2 = $_FILES['photo2']['tmp_name'];
			$myfile2 =$_FILES['photo2']['name'];
		 	$location2="uploaded_photos/".$myfile2;
			move_uploaded_file($temp2,"uploaded_photos/" . $myfile2);

		
					//uploading the file
					
		 	
					 

						$product = New Product();
						$product->image1 			= $location;
						$product->image2 			= $location1;
						$product->image3 			= $location2;
						$product->update($_POST['proid']); 

						redirect("index.php");
						 
							
				}
			
			 
		


	function setBanner(){
		$promo = New Promo();
		$promo->PROBANNER  =1;  
		$promo->update($_POST['PROID']);

	}

 	function setDiscount(){
 		if (isset($_POST['submit'])){

		$promo = New Promo();
		$promo->PRODISCOUNT  = $_POST['PRODISCOUNT']; 
		$promo->PRODISPRICE  = $_POST['PRODISPRICE']; 
		$promo->PROBANNER  =1;    
		$promo->update($_POST['PROID']);

		msgBox("Discount has been set.");

		redirect("index.php"); 
 		}
	
	}
	function removeDiscount(){
 		if (isset($_POST['submit'])){

		$promo = New Promo();
		$promo->PRODISCOUNT  = $_POST['PRODISCOUNT']; 
		$promo->PRODISPRICE  = $_POST['PRODISPRICE']; 
		$promo->PROBANNER  =1;    
		$promo->update($_POST['PROID']);

		msgBox("Discount has been set.");

		redirect("index.php"); 
 		}
	
	}
?>