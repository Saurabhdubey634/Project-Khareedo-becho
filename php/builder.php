<html>
<head>

<style type="text/css">
body, html {
  height: 100%;
  margin: 0;
  font-color:#ffffff;
}

.bg {
  /* The image used */
  background-image: url("img/background.jpeg");

  /* Full height */
  height: 100%; 
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: repeat;
  background-size: cover;
}
#outer {
   
    margin:auto auto 0 auto;
    display:block;
}
#inner {
   
    margin:163px 100px 150px 500px;
 
    display:inline-block;
}
.Center { 
            
            position:fixed; 

            top: 71%; 
            left: 58%; 
            margin-top: -100px; 
            margin-left: -100px; 
        } 
.form-style-9{
	max-width: 350px;
	background: #FAFAFA;
	padding: 80px;
	margin-top:50px;
	margin: auto ;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
	
	
	
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
	
}
</style>
</head>




<body>
<div class="bg">
<div id="outer">
  <div id="inner">

	
<?php


if(isset($_POST["submit"])) {
	
$target_dir = "uploads/";
$email= $_POST["email"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            // mail
            require_once './PHPMailer-master/src/PHPMailer.php';
			require("./PHPMailer-master/src/SMTP.php");
			require("./PHPMailer-master/src/Exception.php");
            

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = "ssl";
            $mail->Port     = 465;  
            $mail->Username = "shellamazesubm1999@gmail.com";
            $mail->Password = "SHELLDOCSUB@1999";
            $mail->Host     = "ssl://smtp.gmail.com";
            $mail->Mailer   = "smtp";
            $mail->SetFrom("shellamazesubm1999@gmail.com");
            $mail->AddReplyTo("shellamazesubm1999@gmail.com");
            $mail->AddAddress($email) ;   
            $mail->Subject = "from local script";
            $mail->WordWrap   = 80;
            $mail->MsgHTML("<h1> you got an email</h1>");

            // foreach ($_FILES["attachment"]["name"] as $k => $v) {
            //     $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
           // }
            $mail->AddAttachment($target_file);

            $mail->IsHTML(true);

            if(!$mail->Send()) {
                echo "<p class='error'>Problem in Sending Mail.</p>";
            } else {
                echo "<p class='success'>Mail Sent Successfully.</p>";
            }
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
}
?>

<form class="form-style-9" action="#" method="POST" enctype="multipart/form-data">

<ul>
<li>
  <input type="file" name="fileToUpload" class="field-style field-full align-none" />
</li>

<li>

<input type="email" name="email" class="field-style field-full align-none" placeholder="Your Email" />
</li>

<li>

 <button class="field-style field-full align-none btn  btn-primary btn-sm" value="send" name="submit" type="submit" > Submit</button>

</li>
</ul>
</form>
</div>
</div>
</div>
</body>
</html>