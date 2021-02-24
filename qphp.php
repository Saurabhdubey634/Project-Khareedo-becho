<?php
$link = mysqli_connect("localhost", "root", "", "db_ecommerce");
 
		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		if(isset($_POST['submit'])){
			$ON=$_POST['ORGN'];
			$TOI=$_POST['INDUSTRY'];
			$FN=$_POST['FIRSTNAME'];
			$LN =$_POST['LASTNAME'];
			$EMAIL = $_POST['EMAIL'];
			$PN= $_POST['PHONENO'];
			$SS= $_POST['STATE'];
			$CITY= $_POST['CITY'];
			$EM= $_POST['DESCRIPTION'];
			$MESSAGE= $_POST['message'];
			
		$sql = "INSERT INTO quotation (OrganizationName,IndustryType,FirstName,LastName,Email,PhoneNo,SelectState,City,Email1,Desciption)
		VALUES ('$ON', '$TOI', '$FN','$LN','$EMAIL','$PN','$SS','$CITY','$EM','$MESSAGE')";
		if(mysqli_query($link, $sql)){
			echo 'Record inserted successfully!"';
			header("Location:quotation.php");
			
		} else{
			
			
			echo "ERROR: Could not able to Add Tender $sql. " . mysqli_error($link);
		}
		}?>