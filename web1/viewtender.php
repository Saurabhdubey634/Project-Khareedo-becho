<html>
<head>
	<link href="css/viewtender.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Outdoor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->

	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Archivo+Black&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>
 <section class="gallery pt-5">
		<div class="gallery-inner pt-xl-5 pt-lg-3">
		<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Tender Details</h3>
		<div class="container">
		<div class="row">	
			<table>
		  
				<tbody>
				
            
              <?php
			  $con=mysqli_connect("localhost","root","","db_ecommerce");
			
			
				
				
			  
             if(isset($_GET['q'])){
                $query = $query = "SELECT * FROM  `tbltender` t
                          WHERE   TENID='{$_GET['q']}'";
              }
              
				if($result=$con->query($query))
				{
					$numrow=mysqli_num_rows($result);
					 if ($numrow > 0) { 
						while($row=$result->fetch_assoc()){
							$location=$row["LOCATION"];
							$description=$row["DESCRIPTION"];
							$saeid=$row["SAEID"];
							$emd=$row["EMD"];
							$procost=$row["PROCOST"];
							$lastdate=$row["LASTDATE"];
							$pdf=$row["PDF"];
							echo '<table><tr>
							<td>SAE-ID</td>
							<td> '.$saeid.'</td>
							</tr>
							<tr>
							<td>Project Description</td>
							<td>'.$description.'</td>
							</tr>
							<tr>
							<td>Project Cost</td>
							<td>'.$procost.'</td>
							</tr>
							<tr>
							<td>EMD</td>
							<td>'.$emd.'</td>
							</tr>
							<tr>
							<td>Last Date</td>
							<td>'.$lastdate.'</td>
							</tr>
							<tr>
							<td>Location</td>
							<td>'.$location.'</td>
							</tr></table>';
					}
					 }					
					 else{ 

						echo '<tr><td>Tender not Available</td></tr>';
					}


            
				
					$result->free();
				
				}
				
				?>
				</tbody>
		</table>
</table>
						
	</div>				
	</div>			
	</div>
    
  </section>
  <section class="gallery pt-5">
	
		
		<div class="container">
		<div class="row">		
		  <table id="download">
				<tbody>
				 <?php
			  $con=mysqli_connect("localhost","root","","db_ecommerce");
				if(isset($_GET['q'])){
					$query = "SELECT * FROM  `tbltender` t
                          WHERE   TENID='{$_GET['q']}'";
              }
              
				if($result=$con->query($query))
				{
					$numrow=mysqli_num_rows($result);
					 if ($numrow > 0) { 
						while($row=$result->fetch_assoc()){
							$pdf=$row["PDF"];
							echo '<table><tr>
							<td><a href="ECommerce/admin/AddTender/uploaded_pdf/'.$pdf.'"><h>Click here</h></a><br>
						
						
							<h>To download the document and get entire detail</h></td>
							</tr></table>';
					}
					 }					
					 else{ 

						echo '<tr><td>pdf not available</td></tr>';
					}


            
				
					$result->free();
				
				
				}
				
				?>
					
					
					
				</tbody>
		  </table>
		  </div>
		  </div>
		  </div>
		  </section>
	
  
</body>
</html>