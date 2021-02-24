<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Single :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="product/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="product/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="product/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="product/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="product/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="product/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="product/css/jquery-ui1.css">
	<link href="product/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="product/css/flexslider.css" type="text/css" media="screen" />
	<link href="product/css/style.css" rel='stylesheet' type='text/css' />
	<link href="product/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
					 <?php



                              if (!empty($_SESSION['gcCart'])){ 

                                echo '<script>totalprice()</script>';

                                  $count_cart = count($_SESSION['gcCart']);

                                for ($i=0; $i < $count_cart  ; $i++) { 
 
                                       $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                                                 WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.`PROID` = '".@$_SESSION['gcCart'][$i]['productid']."'";
                                       $mydb->setQuery($query);
                                      $cur = $mydb->loadResultList();
                                
                                
                                 foreach ($cur as $result) {

                                ?>
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>">
													<div class="thumb-image"> <img src="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
												<li data-thumb="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>">
													<div class="thumb-image"> <img src="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
												<li data-thumb="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>">
													<div class="thumb-image"> <img src="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
							</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									 <h2>Product Name<?php  echo $result->PRODISPRICE; ?></h2>
									 <h2>Brand Name <?php  echo $result->PRODISPRICE; ?></h2>
									 <h2>About product <?php  echo $result->PRODISPRICE; ?></h2>
									  <h2>About product <?php  echo $result->PRODISPRICE; ?></h2>
									<div class="col-md-3 top-info text-left mt-lg-4">
										<h6>Need Help</h6>
										<ul>
										<li>
											<i class="fas fa-phone"></i>Request for quotation</li>
										<li class="number-phone mt-3">+919967857789</li>
										</ul>
									</div>
									
									
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Quality :</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">5 Qty</option>
													<option value="null">6 Qty</option> 
													<option value="null">7 Qty</option>					
													<option value="null">10 Qty</option>								
												</select>
										</div>
									</div>

									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="Farenheit">
														<input type="hidden" name="amount" value="575.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															Add to Cart
														</button>
														
													</form>
		
												</div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>
											
										</ul>
			
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Specification</li>
											<li>About Brand</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
												
											</div>
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													<p><?php  echo    $result->PRODESC; ?></p>
													
													
												</div>
											</div>
											<div class="tab3">
					
												<div class="single_page">
													<p><?php  echo    $result->PRODESC; ?></p>
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->
					
					
				<div class="testimonials p-lg-5 p-3 mt-4">
					<h2>What More</h2>
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Products</h3>
								<p>100% Original and quality assured products from leading <br> manufacturers/suppliers</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Payment</h3>
								<p>Secured Online payments available</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Delivery</h3>
								<p>Delivery of products will be within promised time <br>and as per your desired location</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Help Desk</h3>
								<p>24/7 help for our customers for any problem <br> call on:+919967857789</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
				 <?php  
                                 }
                               }
                               }else{ 
                                  echo "<h1>There is no item in the cart.</h1>";
                               } 
                            ?>  
			</div>
		</div>
		
	</div>
</section>

		<!--footer -->

		<!-- //footer -->

		<!--jQuery-->
		<script src="product/js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="product/js/modernizr-2.6.2.min.js"></script>
		<script src="product/js/classie-search.js"></script>
		<script src="product/js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="product/js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="product/js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="product/js/owl.carousel.js"></script>
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
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="product/js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="product/js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="product/js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

		<!-- dropdown nav -->
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
		<!-- //dropdown nav -->
	<script src="product/js/move-top.js"></script>
    <script src="product/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>