<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>kharido Becho</title>
	<link rel ="stylesheet" href ="https://www.w3school.com/wcss/4/w3.css">
	<link rel =" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
	
    <![endif]--> 
	
	<link href="css/developer.css" rel="stylesheet">
	<link href="css/category1.css" rel="stylesheet">
	<link href="css/tendermenu.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
	<link rel="stylesheet" href="web1/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="web1/css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="web1/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="web1/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Archivo+Black&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
	
	
	
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
  width:20px;
}
</style>
	
	
</head><!--/head-->
 


 

<body style="background-color:white" onload="totalprice()" >
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="index.php">
				KHARIDO BECHO.COM
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
				<ul class="navbar-nav mx-xl-auto">
					<li>
						<a class="nav-link text-uppercase active" href="<?php echo web_root;?>"><i class ="fa fa-home">HOME</i></a>
					</li>
					
					<li>
					<div class="dropdown">
						<a class="nav-link text-uppercase" href="#">BUY</a>
						 <ul class="dropdown-menu">
							<li><a tabindex="-1" href="home.php">Buy with payment</a></li>
							<li><a tabindex="-1" href="barter.php">Buy with Battel system</a></li>
						</ul>
					</div>
						 
  
					</li>
					 <?php if (isset($_SESSION['CUSID'] )) { ?>  
                     
                  <li><a  class="nav-link text-uppercase" href="admin/index.php"><i class="fa fa-camera"></i>SELL</a></li>
                <?php }else{ ?> 
                <li><a class="nav-link text-uppercase" data-target="#developermodel" data-toggle="modal"  href=""><i class="fa fa-camera"></i>SELL</a></li>
				
              <?php } ?>

					
					
				
					<li>
						<a class="nav-link text-uppercase" href="<?php web_root?>index.php?q=contact">Contact Us</a>
					</li>
					
						      
               
                <?php if (isset($_SESSION['CUSID'] )) { ?>  
                     
                  <li><a  class="nav-link text-uppercase" href="<?php echo web_root?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php }else{ ?> 
                <li><a class="nav-link text-uppercase" data-target="#smyModal" data-toggle="modal"  href=""><i class="fa fa-lock"></i> Login/signup</a></li>
				
              <?php } ?>
					
				
				
			</div>
		</nav>
	</header>
	
 
   



          <?php 
            require_once $content; 
         ?> 






    <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>e</span>-product</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="col-sm-6">
              <div class="video-gallery text-center">
                <a href="#"> 
                    <iframe class="iframe-img"  src="https://www.youtube.com/embed/d8N21Q_UN4w"   allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                </a> 
              </div>
            </div>
            
         
          <div class="col-sm-3">
            <div class="address">
              <img src="images/home/map.png" alt="" />
              <p>india</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-widget">
      <div class="container">
        <p>You can modify this section using your own personal information</p>
        <div class="row">
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Service</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Online Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Change Location</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Quick Shop</h2>
              <ul class="nav nav-pills nav-stacked">
                 <?php 
                      $mydb->setQuery("SELECT * FROM `tblcategory` LIMIT 6");
                      $cur = $mydb->loadResultList();
                     foreach ($cur as $result) {
                      echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                      }
                  ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Policies</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privecy Policy</a></li>
                <li><a href="https://youtu.be/9hcCHTwW3HA">HR Record System</a></li>
                <li><a href="https://youtu.be/aMDC3Da4KIA">Point of Sales</a></li>
                <li><a href="https://youtu.be/d8N21Q_UN4w">Resevation System</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>About Shopper</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Careers</a></li>
				<li><a href="#">Copyright</a></li>
              </ul>
            </div>
          </div>
      
          
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Modified by <span><a href="https://bit.ly/2LPn9Wu">saurabh</a></span></p>
          <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">saurabh</a></span></p>
        </div>
      </div>
    </div>
    
  </footer><!--/Footer-->


 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>


 <?php include "LogSignModal.php"; ?> 
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

   
<script src="<?php echo web_root; ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo web_root; ?>js/price-range.js"></script>
<script src="<?php echo web_root; ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo web_root; ?>js/main.js"></script> 

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
  <script src="js/contact.js"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script type="text/javascript">
  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>  
  <!--web1---------------------------------------------- code-->
<script src="web1/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="web1/js/bootstrap.js"></script>
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
	<script src="web1/js/JiSlider.js"></script>
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
	<script src="web1/js/owl.carousel.js"></script>
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
	<link rel="stylesheet" href="web1/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="web1/css/owl.carousel.css" type="text/css" media="screen" property="" />
	<!-- //carousel(for feedback) -->

	<!-- flexisel(for filter) -->
	<script src="web1/js/jquery.flexisel.js"></script>
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
	<script src="web1/js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="web1/js/move-top.js"></script>
	<!-- easing -->
	<script src="web1/js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="web1/js/outdoor.js"></script>

	<script src="web1/js/bootstrap.js"></script>  

</body>
</html>