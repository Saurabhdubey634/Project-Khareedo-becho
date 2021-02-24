<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	
	<!-- //banner slider -->
<html>
<head>
<link href="css/tendermenu.css" rel="stylesheet">
</head>
<body>

<div class="inner-banner-w3ls">
		<div class="container">
			<!-- page details -->
			<div class="breadcrumb-agile">
				<div aria-label="breadcrumb">
					
				</div>
			</div>
			<!-- //page details -->
		</div>
	</div>
	 <section >
		<div class="gallery-inner pt-xl-5 pt-lg-3">
		<div class="container">
		<div class="row">		
		 
				
            
              <?php
			  $con=mysqli_connect("localhost","root","","db_ecommerce");
			
			
				
				
			  
             if(isset($_GET['q'])){
                 $query = "SELECT * FROM  `tbltender` 
                          WHERE       LOCATION='{$_GET['id']}'";
              }
              
				if($result=$con->query($query))
				{
					$numrow=mysqli_num_rows($result);
					 if ($numrow > 0) { 
						while($row=$result->fetch_assoc()){
							$location=$row["LOCATION"];
							$description=$row["DESCRIPTION"];
							$saeid=$row["SAEID"];
							$procost=$row["PROCOST"];
							$lastdate=$row["LASTDATE"];
							$tenid=$row["TENID"];
							echo '<table><tr>
							
							<td>Location:-  '.$location.'</td>
							</tr>
							<tr>
							<td>Description:-  '.$description.'</td>
							<td></td>
							<td></td>
							<td><a href="viewtender.php?q='.$tenid.'"><button type="submit" name="btnorder" class="btn btn-default add-to-cart">View Tender</button></a></td>
							</tr>
							<tr>
							<td>SAE-ID:-  '.$saeid.'</td>
							<td>Value:-  '.$procost.'</td>
							<td>Last Date:-  '.$lastdate.'</td>
							</tr></table>';
					}
					 }					
					 else{ 

						echo '<table><tr><td>Tender not Available</td></tr></table>';
					}


            
				
					$result->free();
				
				}
				
				?>
				

						
	</div>				
	</div>			
	</div>
    
  </section>
  
<body>
</html>