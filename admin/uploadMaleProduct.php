<?php
   session_start();
   if(isset($_SESSION['userinformation']) && $_SESSION['userinformation'] != ''){

   }else{
      header("Location:index.php");
   }
?>
<!doctype html>
<html lang="en">
   
<?php
   $pagename = $_SERVER['PHP_SELF'];
   $pagename = explode("/", $pagename);
   $pagename = $pagename[count($pagename)-1];


?>
<head>
      <?php
         require_once('header.php');
      ?>
   </head>

   <body>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
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
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
      
      
           
         <div id="content-page" class="content-page">
  
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upload Male Product</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="maleProductUpdate" name="maleProductUpdate" action="
                           " method="post">
                                 <div class="form-row">
                                    <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                    <div class="col-lg-6">
                                        <label>Add Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="preveiwImage(this)">
                                          <label class="custom-file-label">Choose file</label>
                                       </div>
                                    </div>
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px">      
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="col-md-12">
                                       <label>Product Name</label>

                                       <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product Name" onkeyup="retrieveProduct(this)">
                                       <input type="hidden" name = "pagename" id = "pagename" value = "<?php echo $pagename?>">


                                      
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
                                    <option>Select men category</option>
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
      <?php

         require_once('js.php');
      ?>
      <!-- My Custom JavaScript -->
      <script>
         $(document).ready(function(){
            $("#p_name").focus();
         });

         function retrieveProduct(getThis){
            pagename = $("#pagename").val();
            getProduct = getThis.value;
            getProduct = "getProduct=" + getProduct +'-'+pagename;
            
   
            $.post("retrieveProducts.php", getProduct).done(function(data){
               data = $.parseJSON(data);
               if(data !=0 ){
                  //check if user image exist 
                  var urlToFile = 'male products/' + data[0] + '.jpg';
                  var xhr = new XMLHttpRequest();
                  xhr.open('HEAD', urlToFile, false);
                  xhr.send();
                  if(xhr.status != 404){
                     $("#userimage").attr('src', urlToFile + `?v=${new Date().getTime()}`)
                  }else{
                     
                     $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
                  }                
                               
                           
                  $("#p_name").val(data[1]);
                  $("#brand_name").val(data[2]);
                  $("#p_price").val(data[4]);
                  $("#p_category").val(data[3]);
                  $("#p_description").val(data[5]);
                 
               }else{
                  
                  $("#brand_name").val('');
                  $("#p_description").val('');
                  $("#p_price").val('');
                  // $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
               }
            });
         }

         function updateAccount(){
            productName      = $("#p_name").val();
            brandName         = $("#brand_name").val();
            productPrice      = $("#p_price").val();
            productCategory   = $("#p_category").val();
            productDescription      = $("#p_description").val();
            
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
                           alert("Product inserted successfully");
                           ClearFields();
                        }else if(e == -1){   
                           alert("error uploading");
                        }else{
                           alert('something went wrong');
                        
                        }
							}
						});	
                  }
              
            }
         }

         // function ClearFields(){
         //    $("#userfile").val('');
         //    $("#firstname").val('');
         //    $("#lastname").val('');
         //    $("#email").val('');
         //    $("#password").val('');
         //    $("#cpassword").val('');
         //    $("#picture_hidden_tag").val("F");
         //    $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
         // }



      function preveiwImage(getImage)
      {
         

         var fileType = document.getElementById('userfile').files[0].type;
         
      
         var fileSize = document.getElementById('userfile').files[0].size;
         /*******CONVERT IMAGE FILE TO KILOBYTE*******/
         var fileSize = Math.floor(fileSize/(1024));
         // alert(fileSize);
         if(getImage.files && getImage.files[0]){//ensure that only one image is uploaded at a time
         
            if(fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png'){//ensure that file is jpg/jpeg
               /******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
            
               if(fileSize<=5000){
                  
                  var imgReader = new FileReader();// keyword NEW is used to create an instance of a class FileReader
                  imgReader.onload = function(e)//returning a value [e]
                  {
                     $('#userimage').attr('src', e.target.result);// append the uploaded image to the img tag
                     $("#picture_hidden_tag").val("T");
                  }
                  imgReader.readAsDataURL(getImage.files[0]);       
               }else{
                  alert("Image Size too large for Upload!");
                  $("#userfile").val('');
               }
            }else{
               alert("File format not Supported/Allowed for Upload!, Please Choose another.");
               $("#userfile").val('');
            }
         }
      }	   
      </script>


   </body>


</html>