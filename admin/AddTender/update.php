<?php
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
			$categ= $_POST['category'];
			$tendstat='Available';
			$tenid=$_POST['tenid'];
			$rawdate = htmlentities($_POST['lastdate']);
			$lastdate = date('Y-m-d', strtotime($rawdate));
			
			
 
		// Attempt insert query execution
		$sql="UPDATE tbltender set SAEID='$saeid',LOCATION='$location',DESCRIPTION='$description',TENCATEGID='$categ',PROCOST='$cost',EMD='emd',LASTDATE='lastdate' WHERE TENID='$tenid'";
		
		if(mysqli_query($link, $sql)){
			echo "Record updated successfully!";
			
			
		} else{
			
			
			echo "ERROR: Could not able to update Tender $sql. " . mysqli_error($link);
		}
 
		// Close connection
		
		
  }
							
 
  
			
			 
		  

?>