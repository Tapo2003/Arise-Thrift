<?php
   session_start();
   if(isset($_SESSION['userinformation']) && $_SESSION['userinformation'] != ''){

   }else{
      header("Location:index.php");
   }
   
   $pagename = $_SERVER['PHP_SELF'];
   $pagename = explode("/", $pagename);
   $pagename = $pagename[count($pagename)-1];


?>
<!doctype html>
<html lang="en">
   

<head>
      <?php
         require_once('header.php');
      ?>
   </head>

   <body>
      
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
      
      
         <?php 
            require_once("dbconn.php");
         
            $sql = "SELECT * FROM about_arise ORDER BY about_id	 DESC";
            $result = mysqli_query($connection,$sql) or die(mysql_error());
            $recordCount = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            if($recordCount > 0){
               $fetchId = $row['about_id'];
               $about_content = $row['about_content'];
               $aboutImage		  = "about_image/".$fetchId.".jpg";
               $imageTag =  $row['image_tag'];
               
            }

         ?>
         <div id="content-page" class="content-page">
  
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upload About Me</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="aboutProduct" name="aboutProduct" action="
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
                                <?php 
                                 // if(isset($_POST["search"]) && !empty($_POST["search"])){

                                 // }
                                if(isset($imageTag) && $imageTag == 'T'){
                                 echo "<img id='userimage' name='userimage' src='".$aboutImage."' class='img-fluid rounded mr-3' alt='user' width='150px' height='70px'>";
                                }else{
                                 echo '<img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px">';
                                }
                                 
                                 ?>      
                                </div>
                                </div>
                           
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">About Description</label>
                                 <?php 
                                    if(isset($about_content) && $about_content != ''){
                                       echo "<textarea class='form-control' id='abt_description' name  = 'abt_description' value = '' rows='5'>$about_content</textarea>     
                                       <input type='hidden' id = 'aboutId' name = 'aboutId' value = '$fetchId'>";    
                                    }else{
                                       echo "<textarea class='form-control' id='abt_description' name  = 'abt_description' value = '' rows='5'></textarea>     
                                       <input type='hidden' id = 'aboutId' name = 'aboutId' value = ''>";  
                                       
                                    }
                                 ?>
                                                                                   
                                </div> 
                               <br>
                                <div class="form-row">
                                    <div class="col">
                                        <button   class="btn btn-primary" id = 
                                        "submit" name = "submit" onclick= "uploadAbout()">Update</button>
                                        
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
            $("#abt_description").focus();
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
                  $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
               }
            });
         }

         function uploadAbout(){
            
            aboutDescription      = $("#abt_description").val();
            aboutId               = $("#aboutId").val();
               feedback = confirm("Are you sure you want to upload about ?");
               var data = $("form#aboutProduct")[0]; 	
               var formData = new FormData(data); 
                  if(feedback == true){
                     $.ajax({                                
                  url: "processUploadAbout.php",
                  type: 'POST',
                  data: formData,
                  async: false,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function (e){  
                     // alert(e);   
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



		//to preview image
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