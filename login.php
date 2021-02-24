 <?php
 require_once ("include/initialize.php"); 
 if (@$_GET['page'] <= 2 or @$_GET['page'] > 5) {
  # code...
    // unset($_SESSION['PRODUCTID']);
    // // unset($_SESSION['QTY']);
    // // unset($_SESSION['TOTAL']);
} 


 
if(isset($_POST['sidebarLogin'])){
  $email = trim($_POST['U_USERNAME']);
  $upass  = trim($_POST['U_PASS']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect(web_root."index.php");
         
    } else {   
        $cus = new Customer();
        $cusres = $cus::cusAuthentication($email,$h_upass);

        if ($cusres==true){


           redirect(web_root."index.php");
        }else{
             message("Invalid Username and Password! Please contact administrator", "error");
             redirect(web_root."index.php");
        }
 
 }
}


 
if(isset($_POST['developerLogin'])){
  $email = trim($_POST['U_USERNAME']);
  $upass  = trim($_POST['U_PASS']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect(web_root."index.php?q=developer");
         
    } else {   
        $cus = new Customer();
        $cusres = $cus::cusAuthentication($email,$h_upass);

        if ($cusres==true){


           redirect(web_root."home.php");
        }else{
             message("Invalid Username and Password! Please contact administrator", "error");
             redirect(web_root."home.php");
        }
 
 }
}



 if(isset($_POST['modalLogin'])){
  $email = trim($_POST['U_USERNAME']);
  $upass  = trim($_POST['U_PASS']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') { 
      message("Invalid Username and Password!", "error");
       redirect("home.php");
         
    } else {   
        $cus = new Customer();
        $cusres = $cus::cusAuthentication($email,$h_upass);

        if ($cusres==true){
			echo "<script> alert(' You are now  successfully loged in.'); </script>";
			redirect("index.php");
           

         
        }else{
             echo "<script> alert(' Your user name or password is wrong .try again!.'); </script>";
             redirect("index.php");
        }
 
 }
 }
 
 

 ?> 
 

 