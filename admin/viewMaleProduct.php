<?php
   session_start();
   if(isset($_SESSION['userinformation']) && $_SESSION['userinformation'] != ''){

   }else{
      header("Location:index.php");
   }

?>
<!doctype html>
<html lang="en">
   
<head>
     <?php
      require_once('header.php');
     ?>
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
            <?php
                require_once('sidebar.php');
            ?>
         <!-- TOP Nav Bar -->
            <?php
                require_once('topnavbar.php');
            ?>
            <?php
               $pageName = $_SERVER['PHP_SELF'];
               $pageName = explode("/", $pageName);
               $pageName = $pageName[count($pageName) - 1];
               

            ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Male Product Table</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th scope  =  "col">#</th>
                                    <th scope  =  "col">Product name</th>
                                    <th scope = "col">Brand name</th>
                                    <th scope="col">Product categories</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product description</th>
                                    <th scope="col">Action</th>
                                 </tr>
                              </thead>
                              <tbody id='tblAccount'>
                           
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upload Male Product</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="maleProductUpdate" name="maleProductUpdate">
                                 <div class="form-row">
                                    <!-- <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                    <div class="col-lg-6">
                                        <label>Add Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="preveiwImage(this)">
                                          <label class="custom-file-label">Choose file</label>
                                       </div>
                                    </div> -->
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px">  
                                        <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="">    
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="col-md-12">
                                       <label>Product Name</label>

                                       <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product Name">

                                       <input type="hidden" name = "pagename" id = "pagename" value = "<?php echo $pageName?>">
                                      
                                    </div>
                                 </div>

                                 <div class="form-row" style = "margin-top:20px">
                                    <div class="col-md-12">
                                       <label>Brand Name<span style = "color:red"> (optional)</span></label>
                                       <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Brand Name" >
                                       
                                       
                                    </div>
                                 </div>
                                <div class="form-row">
                                    <div class="col-md-12" style= "margin-top: 20px">
                                        <label>Product Price</label>

                                        <input type="number" class="form-control" id="p_price" name="p_price" placeholder="Product price">
                                       
                                        
                                    </div>
         
                                 </div>

                                 <div class="form-group"  style= "margin-top: 20px">
                                    <label for="exampleFormControlSelect1">Product Category</label>
                                    <select class="form-control" id="p_category" name = "p_category">
                                       <option></option>
                                       <option>men boots</option>
                                       <option>men sweatshirts</option>
                                       <option>men cargo pants</option>
                                       <option>men leather pants</option>
                                       
                                    
                                    </select>
                                 </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Product Description<span style = "color:red"> (optional)</span></label>
                                 <textarea class='form-control' id='p_description' name  = 'p_description' rows='5'></textarea>
                                
                                 
                              </div>
                               <br>
                                <div class="form-row">
                                    <div class="col">
                                        <button  class="btn btn-primary" id = 
                                        "submit" name = "submit" onclick= "updateAccount()">Update</button>
                                        
                                    </div>                                   
                               </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
        <?php
            require_once('footer.php');
        ?>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <?php
         require_once('js.php');

      ?>
      
      <script>
         
            $(document).ready(function(){
               populateBookTable();
              
            });

            function populateBookTable(){
               $.get('getMaleProduct.php').done(function(feedback){
                  if(feedback == 0){
                     // do nothing
                  }else{
                     $("#tblAccount").html(feedback);
                  }
               });
            }
            function viewAccount(getThis){
               var pageName = $("#pagename").val();
               var productId = getThis.id;
               var productId = 'productid='+ productId + '-' + pageName;
               var productName = $("#p_name").val();
               var brandName = $("brand_name").val();
               var productPrice = $("#p_price").val();
               var productCategory = $("p_category").val();
               var productDescription = $("#p_description").val();
              
            
               $.post('getProductId.php', productId).done(function(feedback){
                  feedback = $.parseJSON(feedback);
                  if(feedback !=0 ){
                     // check if user image exist 
                     var urlToFile = 'male products/' + feedback['productid'] + '.jpg';
                     var xhr = new XMLHttpRequest();
                     xhr.open('HEAD', urlToFile, false);
                     xhr.send();
                     if(xhr.status != 404){
               
                        $("#userimage").attr('src', urlToFile + `?v=${new Date().getTime()}`)
                     }else{
                        $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
                     }                    
                     $("#p_name").val(feedback.p_name);
                     $("#brand_name").val(feedback.brand_name);
                     $("#p_price").val(feedback.p_price);
                     $("#p_category").val(feedback.p_category);
                     $("#p_description").val(feedback.p_description);
                  }else{   
                     $("#p_name").val("");
                     $("#brand_name").val("");
                     $("#p_price").val("");
                     $("p_category").val("");
                     $("p_description").val("");
                              
                  }
               });
            }

            function deleteProduct(getThis){     
            
               var productId = getThis.id;
               var pageName = $("#pagename").val();
               var productId = 'productid='+productId+'-'+pageName;
               
            
               var response = confirm("You sure you want to delete product ?")
               if(response == true){
                  $.post("deleteProduct.php", productId).done(function(returndata){
                     alert(returndata);
                     if(returndata == 1){
                        alert("Product deleted successfully");
                        
                     }else if(returndata == 0){
                        alert("Unable to delete product");
                     }else if(returndata == -1){
                        alert("Record does not exist");
                     }
                  });
               }
                 
            }

         function updateAccount(){
            productName        = $("#p_name").val();
            brandName          = $("#brand_name").val();
            productPrice       = $("#p_price").val();
            productCategory    = $("#p_category").val();
            productDescription = $("#p_description").val();
         
            
            if(productName == "" || productPrice == "" || productCategory == ""){
               alert("Please fill in all the required fields");
            }else{
                  feedback = confirm("Are you sure you want to update account?");
                  var data = $("form#maleProductUpdate")[0]; 	
                  var formData = new FormData(data); 
                  if(feedback == true){
                     $.ajax({                                
							url: "processUploadMaleProduct.php",
							type: 'POST',
							data: formData,
							async: false,
							cache: false,
							contentType: false,
							processData: false,
							success: function (e) 
							{  
                        if(e == 2){
                           alert("Record Updated Successfully");
                           ClearFields();
                        }else if (e == -2){
                           alert("Error Updating Record");
                        }else if (e == 1){
                           alert("Inserted");
                           ClearFields();
                        }else if(e == -1){
                           alert("error uploading");
                        }else{
                           alert(e);
                        
                        }
							}
						});	
                  }
              
            }
         }


           

            
      </script>
   </body>


</html>