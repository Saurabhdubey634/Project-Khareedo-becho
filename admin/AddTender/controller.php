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
	$link = mysqli_connect("localhost", "root", "", "db_ecommerce");
 
		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		if(isset($_POST['save'])){
			$saeid=$_POST['saeid'];
			$location=$_POST['location'];
			$description=$_POST['description'];
			$cost =$_POST['cost'];
			$emd = $_POST['emd'];
			$categ= $_POST['categoryname'];
			$tendstat='Available';
			$rawdate = htmlentities($_POST['lastdate']);
			$lastdate = date('Y-m-d', strtotime($rawdate));
			
			$allow=array('pdf');
			$temp=explode(".",$_FILES['pdfile']['name']);
			$extension=end($temp);
			$myfile =$_FILES['pdfile']['name'];
			move_uploaded_file($_FILES['pdfile']['tmp_name'],"uploaded_pdf/" . $myfile);
			
			$errofile = $_FILES['image']['error'];
			$type = $_FILES['image']['type'];
			$temp = $_FILES['image']['tmp_name'];
			$myfile1 =$_FILES['image']['name'];
		 	$location1="uploaded_photos/".$myfile1;
			move_uploaded_file($temp,"uploaded_photos/" . $myfile1);


		 	
					
 
		// Attempt insert query execution
		$sql = "INSERT INTO tbltender (SAEID,LOCATION,DESCRIPTION,TENCATEGID,PROCOST,EMD,LASTDATE,PDF,TENDERSTATS,IMAGES)
		VALUES ('$saeid', '$location', '$description','$categ','$cost','$emd','$lastdate','".$myfile."','$tendstat','".$location1."')";
		if(mysqli_query($link, $sql)){
			message("Record inserted successfully!", "success");
			redirect("index.php");
			
		} else{
			
			
			echo "ERROR: Could not able to Add Tender $sql. " . mysqli_error($link);
		}
 
		// Close connection
		
		
  
							
 
  
}
}
			 
		  


	  
 
 
	function doEdit(){
			$link = mysqli_connect("localhost", "root", "", "db_ecommerce");
 
		// Check connection
			if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
			}
		if (@$_GET['stats']=='NotAvailable'){
			$product = New Tender();
			$product->TENDERSTATS	= 'Available';
			$product->update(@$_GET['id']);

		}elseif(@$_GET['stats']=='Available'){
			$product = New Tender();
			$product->TENDERSTATS	= 'NotAvailable';
			$product->update(@$_GET['id']);
		}else{

		if (isset($_GET['front'])){
			$product = New Tender();
			$product->FRONTPAGE	= True;
			$product->update(@$_GET['id']);

		}
	}



		if(isset($_POST['save'])){
								$product = New Tender();
						// $product->PROMODEL 		= $_POST['PROMODEL']; 
						// $product->PRONAME 		= $_POST['PRONAME']; 
						$product->SAEID 		= $_POST['saeid']; 
						$product->LOCATION 		= $_POST['location']; 
						$product->DESCRIPTION 		= $_POST['description'];
						$product->TENCATEGID	    = $_POST['category'];
						$product->PROCOST		= $_POST['cost'];
						$product->EMD	= $_POST['emd']; 
						$product->LASTDATE		= $_POST['lastdate'];  
						$product->update($_POST['TENID']);
  

			message("Tender has been updated!", "success");
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

			$product = New Tender();
			$product->delete($id[$i]);
 

			$stockin = New StockIn();
			$stockin->delete($id[$i]);

			$promo = New Promo();   
			$promo->delete($id[$i]);

			message("Tender has been Deleted!","info");
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


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_POST['proid']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_POST['proid']);
			}else{
					//uploading the file
					move_uploaded_file($temp,"uploaded_photos/" . $myfile);
		 	
					 

						$product = New Product();
						$product->IMAGES 			= $location;
						$product->update($_POST['proid']); 

						redirect("index.php");
						 
							
					}
			}
			 
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