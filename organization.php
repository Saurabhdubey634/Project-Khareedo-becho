<html>
<head>
	
	<link href="css/tendermenu.css" type="text/css" rel="stylesheet">
	<style>
	img {
    max-width:85%;
    height:auto;
}


	</style>
</head>
<body>

	

<section >
		<div >
			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Organization</h3>
	
				 <div class="container">
				<div class="row">	
				 <div class="col-sm-4">
                 
                        <div>  
				<table>
				
				<tbody>
						<?php	
						$con=mysqli_connect("localhost","root","","db_ecommerce");
				  		$query = "SELECT IMAGES FROM tbltender   ";
						
						
						
						if($result=$con->query($query))
							
						{	
						$numrow=mysqli_num_rows($result);
						

  
						$r=$numrow%3;
						$count1=0;
						$count=0;
						
						
							$fieldname1;
							$fieldname2;
							$fieldname3;
							$fieldname4;
							$fieldname5;
							$fieldname6;
							while($row=$result->fetch_assoc()){
								
								$count++;
								$count1++;
								$fieldname=$row["IMAGES"];
								if($count==1){
									$fieldname1=$fieldname;
								}
								if($count==2){
									$fieldname2=$fieldname;
								}
								if($count==3){
									
									$fieldname3=$fieldname;
									echo '<tr>
							
								<td><img src="admin/AddTender/'.$fieldname1.'" alt=""/></td> 
								<td><img src="admin/AddTender/'.$fieldname2.'"/></td> 
								<td><img src="admin/AddTender/'.$fieldname3.'"/></td> 
									
								</tr>'
							;
							$count=0;
								}
								if($r==1 and $count1==$numrow){
									$fieldname4=$fieldname;
									echo '<tr><td><img src="admin/AddTender/'.$fieldname4.'"/></td> </tr>';
								}
								if($r==2 and $count1==$numrow-1){
									$fieldname5=$fieldname;
									
								}
								if($r==2 and $count1==$numrow){
									$fieldname6=$fieldname;
									echo '<tr><td><img src="admin/AddTender/'.$fieldname5.'"/></td> 
											<td><img src="admin/AddTender/'.$fieldname6.'"/></td></tr>';
								}
								
								
							}
							$result->free();
						}
						?>
				  		</tbody>
					</table>

				
				</div>
				</div>
    </div>

    </div>
  </section>

</body>
</html>