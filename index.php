<?php
require_once ("include/initialize.php");
// if(isset($_SESSION['IDNO'])){
// 	redirect(web_root.'index.php');

// }


$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';




switch ($view) {
 

	case 'product' :
        $title="Products";	
		$content='menu.php';		
		break;
 	case 'cart' :
        $title="Cart List";	
		$content='cart.php';		
		break;
 	case 'profile' :
        $title="Profile";	
		$content='customer/profile.php';		
		break;

	case 'trackorder' :
        $title="Track Order";	
		$content='customer/trackorder.php';		
		break;

	case 'orderdetails' :  

         If(!isset($_SESSION['orderdetails'])){
         $_SESSION['orderdetails'] = "Order Details";
		} 
		$content='customer/orderdetails.php';	


	if( isset($_SESSION['orderdetails'])){
      if (@count($_SESSION['orderdetails'])>0){
        	$title = 'Cart List' . '| <a href="">Order Details</a>';
		      }
		    } 
		break;

	case 'billing' : 	
	 If(!isset($_SESSION['billingdetails'])){
         $_SESSION['billingdetails'] = "Order Details";
		} 
		$content='customer/customerbilling.php';	
		if( isset($_SESSION['billingdetails'])){
      if (@count($_SESSION['billingdetails'])>0){
        	$title = 'Cart List' . '| <a href="">Billing Details</a>';
		      }
		    } 	
		break;

	case 'contact' :
        $title="Contact Us";	
		$content='contact.php';		
		break;
 	case 'single-item' :
        $title="Product";	
		$content='single-item.php';		
		break;
	case 'developer' :
        $title="Developer";	
		$content='developer.php';		
		break;
	case 'builder' :
        $title="Builder";	
		$content='php/phpupload.php';		
		break;
	case 'category' :
        $title="Category";	
		$content='category2.php';		
		break;
	case 'state' :
        $title="State";	
		$content='state.php';		
		break;
	case 'organization' :
        $title="Organization";	
		$content='organization.php';		
		break;
	case 'tendermenu' :
        $title="tendermenu";	
		$content="tendermenu.php";		
		break;
	case 'statemenu' :
        $title="statemenu";	
		$content='statemenu.php';		
		break;
	case 'recoverpassword' :
        $title="Recover Password";	
		$content='passwordrecover.php';		
		break;
	case 'category' :
        $title="Recover Password";	
		$content='passwordrecover.php';		
		break;
	case 'ecommerce' :
      	$title="Product";	
		$content ='home.php';
		break;
	case 'quotation' :
        $title="Request for quotation";	
		$content='quotation.php';		
		break;
	
	default :
	    $title="Home";	
		$content ='home1.php';		

}

       
    
 
require_once("theme/templates.php");
 

?>

