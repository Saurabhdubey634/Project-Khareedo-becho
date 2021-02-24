
<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('..img/background.jpeg');">	
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


 <form class="form-horizontal span6" action="#" method="POST" enctype="multipart/form-data"    >
 <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Send document</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload pdf:</label>

                      <div class="col-md-8">
                      <input type="file"  value="" name="fileToUpload" id="image" />
                      </div>
                    </div>
                  </div>
			<div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Email:</label>

                      <div class="col-md-8">
                      	<input type="email" placeholder="Your Email" name="email" id="email" value=" ">
                      </div>
                    </div>
                  </div>
				<div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn  btn-primary btn-sm" value="send" name="submit" type="submit" ><span class="fa fa-send fw-fa"></span> Send</button>
                      </div>
                    </div>
                  </div>
				 <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>

</form>
</div>
</div>
</div>
</section>
</body>
</html>