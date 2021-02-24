<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Outdoor Exterior Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
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
	<link href="css/tendermenu.css" rel="stylesheet">
	
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
	<!-- header -->
	<section>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="index.html">
				<img src="images/logo4.png" class="logo img-fluid" alt="">Outdoor
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
				<ul class="navbar-nav mx-auto">
					
					<li>
						<a class="nav-link text-uppercase" href="contact.html">LOGIN/SIGN up</a>
					</li>
				</ul>
				<!--<div class="top-info text-lg-right text-center mt-lg-0 mt-3">
					<ul class="list-unstyled">
						<li class="text-white mr-xl-4 mr-2 ml-xl-0 ml-lg-5">+ 12345678099</li>
						<li class="number-phone">
							<a class="request text-uppercase font-weight-bold text-white" href="#">Have any Quastions?</a>
						</li>
					</ul>
				</div>-->
			</div>
		</nav>
	</header>
	<!-- //header -->

	<!-- banner slider-->
	<div class="inner-banner-w3ls">
		<div class="container">
			<!-- page details -->
			<div class="breadcrumb-agile">
				<div aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item" aria-current="page">Category</li>
					</ol>
				</div>
			</div>
			<!-- //page details -->
		</div>
	</div>
	<!-- banner slider-->
	
	<!-- //banner slider -->
	 <section class="gallery pt-5">
		<div class="gallery-inner pt-xl-5 pt-lg-3">
		<div class="container">
		<div class="row">		
		 
				
            
              <?php
			  $con=mysqli_connect("localhost","root","","db_ecommerce");
			
			
				
				
			  
             if(isset($_GET['q'])){
                $query = $query = "SELECT * FROM  `tbltender` 
                          WHERE       LOCATION='{$_GET['q']}'";
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
  

	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids py-sm-4 py-3">
			<div class="container py-xl-5 py-sm-3">
				<div class="row">
					<div class="col-lg-3 col-sm-6 w3l-footer">
						<ul class="list-unstyled">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li class="mt-2">
								<a href="about.html" class="">About Us</a>
							</li>
							<li class="mt-2">
								<a href="#services" class="scroll">Services</a>
							</li>
							<li class="mt-2">
								<a href="gallery.html" class="">Gallery</a>
							</li>
							<li class="mt-2">
								<a href="contact.html" class="">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer mt-sm-0 mt-2">
						<ul class="list-unstyled">
							<li>
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mt-2">
								<a href="#feedback" class="scroll">Testimonials</a>
							</li>
							<li class="mt-2">
								<a href="single.html" class="">Some More</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer footer-social-agile mt-lg-0 mt-4">
						<h1 class="footer-head-w3ls mb-4">Connect with us</h1>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-dribbble"></i>
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<i class="fab fa-vk"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer payment-w3lsmk  mt-lg-0 mt-4">
						<h2 class="footer-head-w3ls mb-4">Payment Options</h2>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fab fa-cc-amex"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-discover"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-cc-jcb"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-paypal"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-stripe"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<i class="fab fa-cc-mastercard"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- copyright -->
	<div class="copy-right-w3ls py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 w3ls-left-copy text-lg-left text-center">
					<p class="copy-right-grids text-white">© 2018 Outdoor. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-4 w3ls-left-copy text-lg-right text-center">
					<p class="text-white">
						<i class="fas fa-phone mr-2"></i> 1234567890</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown smooth -->
	<!-- fixed nav -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 50) {
				$('nav').addClass('shrink');
			} else {
				$('nav').removeClass('shrink');
			}
		});
	</script>
	<!-- //fixed nav -->
	<!-- //navigation -->

	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 3,
				reverse: true
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->

	<!-- carousel(for feedback) -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
	<!-- //carousel(for feedback) -->

	<!-- flexisel(for filter) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel(for filter) -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/outdoor.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->


</body>

</html>