
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }


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

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){


		if ( $_POST['CATEGORY'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{
				$link = mysqli_connect("localhost", "root", "", "db_ecommerce");
 
				// Check connection
				if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				$Tcategory=$_POST['CATEGORY'];
				$sql = "INSERT INTO tendercategory (tendername) VALUES ('$Tcategory')";
				if(mysqli_query($link, $sql)){
					message("New [". $_POST['CATEGORY'] ."] created successfully!", "success");
					redirect("index.php");
					echo "Records inserted successfully.";
				} else{
					redirect("index.php");
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
			
			
		}
		}

	}

	function doEdit(){
		if(isset($_POST['save'])){

			$category = New Category();
			$category->CATEGORIES	= $_POST['CATEGORY'];
			$category->update($_POST['CATEGID']);

			message("[". $_POST['CATEGORY'] ."] has been updated!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$category = New Category();
			$category->delete($id);

			message("Category already Deleted!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>