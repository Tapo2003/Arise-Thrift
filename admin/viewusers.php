<?php
   // session_start();
   // require_once("dbconn.php");
   
   // if(isset($_SESSION['userinformation']) && $_SESSION['userinformation'] != ''){
   //    $username = $_SESSION["username"];
   //    $result = mysqli_query($connection, "SELECT * FROM accessAdmin WHERE username = '$username'");
   //    $row = mysqli_fetch_assoc($result);
   // }else{
      
   //    header("Location:index.php");
   // }
   
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
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tables</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Firstname</th>
                                    <th scope = "col">Lastname</th>
                                    <!-- <th scope="col">Email</th> -->
                                    <th scope="col">Action</th>
                                 </tr>
                              </thead>
                              <tbody id='tblAccount'>
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">View Profile</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="viewaccountform" name="viewaccountform">
                                 <div class="form-row">
                                    <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                    <div class="col-lg-6" style='visibility:hidden'>
                                        <label>Add Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="preveiwImage(this)">
                                          <label class="custom-file-label">Choose file</label>
                                       </div>
                                    </div>
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="100px" height="100px" style="float:right">      
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="col-md-8">
                                       <label>Email</label>
                                       <input type="text" class="form-control" id="email" name="email" placeholder="Email" required onkeyup="retrieveAccount(this)">
                                    </div>
                                 </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Firstname</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
                                    </div>
                                    <div class="col">
                                        <label>Lastname</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"  placeholder="Last name" required>
                                    </div>
                                 </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Password <span style='color:red'>[optional]</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                                    </div>
                                    <div class="col">
                                        <label>Confirm Password<span style='color:red'>[optional]</span></label>
                                        <input type="password" class="form-control" id="cpassword" name="cpassword"  placeholder="" required>
                                    </div>
                               </div>
                               <br>
                                <!-- <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary" onclick="updateAccount()">Update</button>
                                    </div>                                    
                               </div> -->
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
                populateAccountTable();
            });

            function populateAccountTable(){
                $.get('getaccounts.php').done(function(feedback){
                    if(feedback == 0){
                        // do nothing
                    }else{
                        $("#tblAccount").html(feedback);
                    }
                });
            }
            function viewAccount(getThis){
                var accountid = getThis.id;
                accountid = 'accountid='+accountid;
                firstname = $("#firstname").val();
                lastname = $("lastname").val();
               //  alert(888);
               //  alert(accountid);
                $.post('getaccountbyid.php', accountid).done(function(feedback){
                  // alert(feedback);
                  feedback = $.parseJSON(feedback);
                  if(feedback !=0 ){
                     // alert(feedback.firstname);
                     //check if user image exist 
                     var urlToFile = 'passport/' + feedback['adminaccountid'] + '.jpg';
                     var xhr = new XMLHttpRequest();
                     xhr.open('HEAD', urlToFile, false);
                     xhr.send();
                     if(xhr.status != 404){
                        $("#userimage").attr('src', urlToFile + `?v=${new Date().getTime()}`)
                     }else{
                        $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
                     }                    
                     // $("#firstname").val(feedback['firstname']);
                     $("#firstname").val(feedback.firstname);
                     $("#lastname").val(feedback.lastname);
                     $("#email").val(feedback['email']);
                     // $("#emailv").val(feedback['email']);
                     // $("#username").val(data[3]);
                  }else{   
                     $("#userfile").val("");
                     $("#firstname").val("");
                     $("#lastname").val("");
                     $("#email").val("");
                     $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);              
                  }
               });
            }
            function deactivateAccount(getThis){               
               var accountid = getThis.id;
               // alert(888);
               var accountid = 'accountid='+accountid;
               var response = confirm("Are You Sure You Want To Deactivate This Account ?");
               
               if(response == true){
                  $.post("deactivateaccount.php",accountid).done(function(returndata){
                     alert(returndata);
                     if(returndata == 1){
                        alert("Useraccount Deactivated");
                     }else if(returndata == 0){
                        alert("Unable to deactivate account");
                     }else{
                        alert("Some thing has gone wrong");
                   
                     }   
                  });   
               }
                 
            }

            function Activateaccount(getThis){
               var accountid = getThis.id;
               var accountid = 'accountid='+accountid;
               var response = confirm("Are You Sure You Want To Activate Account ?");
               if(response == true){
                  $.post("activateaccount.php", accountid).done(function(returndata){
                     alert(returndata);
                     if(returndata == 1){
                        alert("Useraccout Activated");
                        
                     }else if(returndata == 0){
                        alert("Unable to Activate Account");
                     }else{
                        alert("Something Went Wrong");
                     }
                  })
               }
            }


           

            
      </script>
   </body>

<!-- Mirrored from iqonic.design/themes/vito/html/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:16 GMT -->
</html>