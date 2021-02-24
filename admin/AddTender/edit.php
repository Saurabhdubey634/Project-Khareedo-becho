<?php  

    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }


  $TENID = $_GET['id'];
  $product = New Tender();
  $singleproduct = $product->single_product($TENID);

?>
  
        
        <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Tender</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
 
                <div class="row"> 

        <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME">SAE-ID:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="saeid" placeholder=
                            "SAE-ID" type="text" value="<?php echo $singleproduct->SAEID; ?>">
                      </div>
                    </div>
                  </div>  

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERPHONE">lOCATION:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="OWNERPHONE" name="location" placeholder=
                            "Enter State name" type="text" value="<?php echo $singleproduct->LOCATION; ?>">
                      </div>
                    </div>
                  </div> 
                     <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRODESC">Description:</label>

                      <div class="col-md-8"> 
                        <input  id="PROID" name="TENID"   type="hidden" value="<?php echo $singleproduct->TENID; ?>">
                      <textarea class="form-control input-sm" id="PRODESC" name="description" cols="1" rows="3" ><?php echo $singleproduct->DESCRIPTION; ?>
                      </textarea>
                        
                      </div>
                    </div>
                  </div>
                 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY">Category:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="category" id="CATEGORY">
                          <option value="None">Select Category</option>
                          <?php
                            //Statement

                         $category = New Category();
                          $singlecategory = $category->single_category($singleproduct->TENCATEGID);
                          echo  '<option SELECTED  value='.$singlecategory->TENCATEGID.' >'.$singlecategory->tendername.'</option>';


                          $mydb->setQuery("SELECT * FROM `tendercategory` where TENCATEGID <> '".$singlecategory->TENCATEGID."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option  value='.$result->TENCATEGID.' >'.$result->tendername.'</option>';
                          }
                          ?>
          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ORIGINALPRICE">Project cost:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="ORIGINALPRICE" name="cost" placeholder=
                            "Original Price" type="text" value="<?php echo $singleproduct->PROCOST; ?>">
                      </div>
                       <label class="col-md-2 control-label" for=
                      "PROPRICE">emd:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="PROPRICE" name="emd" placeholder=
                            "EMD" type="text" step="any" value="<?php echo $singleproduct->EMD; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PROQTY">Last Date:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PROQTY" name="lastdate" placeholder=
                            "Quantity" type="date" value="<?php echo $singleproduct->LASTDATE; ?>">
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
            
 
            </div>
 
  
      
<!--/.fluid-container--> 
 </form>