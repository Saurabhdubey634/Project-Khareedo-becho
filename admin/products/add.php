<?php
   if (!isset($_SESSION['CUSID'])){
      redirect("index.php");
     }

      // $autonum = New Autonumber();
      // $result = $autonum->single_autonumber(4);
	  $customer = New Customer();
      $res = $customer->single_customer($_SESSION['CUSID']);
 

?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data"    >
 <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Product</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>  

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">Owner:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="OWNERNAME" placeholder=
                            "Owner Name" type="text" value="<?php echo $res->FNAME .' '.$res->LNAME; ?>" required>
                      </div>
                    </div>
                  </div> 
				  

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERPHONE">Phone:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="OWNERPHONE" name="OWNERPHONE" placeholder=
                            "+91 0000000000" type="number" value="<?php echo $res->PHONE ; ?>" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{3}" required>
                      </div>
                    </div>
                  </div> 
				  
				   
					<div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">Product Name:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="PRODUCTNAME" placeholder=
                            "Product Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>
					<div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">About Product:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="ABOUTPRODUCT1" placeholder=
                            "About Product line1" type="text" value="" required>
                      </div>
                    </div>
                  </div>  
				  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">About Product:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="ABOUTPRODUCT2" placeholder=
                            "About Product line 2" type="text" value="" required>
                      </div>
                    </div>
                  </div>  
				  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">About Product:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="ABOUTPRODUCT3" placeholder=
                            "About Product line 3" type="text" value="" required>
                      </div>
                    </div>
                  </div>  
					<div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">Specification:</label>

                      <div class="col-md-8">
                            <textarea class="form-control input-sm" id="PRODESC" name="SPECIFICATION" cols="1" rows="3"  required></textarea>
                      </div>
                    </div>
                  </div>  
				  
                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRODESC">Description:</label>

                      <div class="col-md-8"> 
                      <textarea class="form-control input-sm" id="PRODESC" name="PRODESC" cols="1" rows="3" required></textarea>
                      </div>
                    </div>
                  </div>
					
					 <div class="form-group">
				     <div class="col-md-8">
					<label class="col-md-4 control-label" for=
                      "CATEGORY">Location:</label>
						<div class="col-md-8">
					
						<select class="form-control input-sm" name="location" id="CATEGORY" required>
						<option value="None">Select State</option>
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
						<option value="Daman and Diu">Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Orissa">Orissa</option>
						<option value="Pondicherry">Pondicherry</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttaranchal">Uttaranchal</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>
						</select>
						</div>
					</div> 
				</div> 
					
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY">Category:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CATEGORY" id="CATEGORY" required>
                          <option value="None">Select Category</option>
                          <?php
                            //Statement
                          $mydb->setQuery("SELECT * FROM `tblcategory`");
                          $cur = $mydb->loadResultList();

                        foreach ($cur as $result) {
                          echo  '<option value='.$result->CATEGID.' >'.$result->CATEGORIES.'</option>';
                          }
                          ?>
          
                        </select> 
                      </div>
                    </div>
                  </div>
					
					
					 <div class="form-group">
				     <div class="col-md-8">
					<label class="col-md-4 control-label" for=
                      "CATEGORY">Select Payment Method:</label>
						<div class="col-md-8">
					
						<select class="form-control input-sm" name="payment" id="seeAnotherField" required>
						
						<option value="Barter">Sell with Barter system</option>
						<option value="Payment">Sell with Payment system</option>
						</select>
						</div>
					</div> 
				</div> 
				</div>
					<div class="form-group"  id="otherFieldDiv">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY">Exchange with:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CATEGORY1" id="otherField" required>
                          <option value="None">Select product name</option>
                          <?php
                            //Statement
                          $mydb->setQuery("SELECT * FROM `tblcategory`");
                          $cur = $mydb->loadResultList();

                        foreach ($cur as $result) {
                          echo  '<option value='.$result->CATEGID.' >'.$result->CATEGORIES.'</option>';
                          }
                          ?>
          
                        </select> 
                      </div>
                    </div>
                  </div>

					
                  <div class="form-group">
                    <div class="col-md-8">
                      
                       <label class="col-md-4 control-label" for=
                      "PROPRICE">Price:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PROPRICE"  step="any" name="PROPRICE" placeholder=
                            "&#8369 Price " type="number" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PROQTY">Quantity:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PROQTY" name="PROQTY" placeholder=
                            "Quantity" type="number" value="" required>
                      </div>
                       
                    </div>
                  </div>

  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image 1:</label>

                      <div class="col-md-8">
                      <input type="file" name="image1" value="" id="image"/ required>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image 2:</label>

                      <div class="col-md-8">
                      <input type="file" name="image2" value="" id="image"/ required>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image 3:</label>

                      <div class="col-md-8">
                      <input type="file" name="image3" value="" id="image"/ required>
                      </div>
                    </div>
                  </div>
				 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn  btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
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
     	  <script>
			$("#seeAnotherField").change(function() {
  if ($(this).val() == "Barter") {
    $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");

$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    $('#otherField2').attr('required', '');
    $('#otherField2').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv').hide();
    $('#otherField1').removeAttr('required');
    $('#otherField1').removeAttr('data-error');
    $('#otherField2').removeAttr('required');
    $('#otherField2').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup").trigger("change");
		  </script> 

       