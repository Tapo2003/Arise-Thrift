<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/vito/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:30 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Arise</title>
      <!-- Favicon -->
      <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" /> -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <section class="sign-in-">
            <div class="container mt-5 p-0 bg-white">
                <div class="row no-gutters">
                    <div class="col-sm-8 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">SIGN UP ADMIN</h1>
                            <!-- <p>Enter your email address and password to access admin panel.</p> -->
                            <form class="mt-4" id = "signup">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <!-- <label for="password">Password</label> -->
                                        <input type="name" class="form-control mb-0" id="name" name ="name" placeholder="Name">
                                    </div>
                                   
                                </div><br>
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail2">Email address</label> -->
                                    <input type="email" class="form-control mb-0" id="email" name = "email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="username">Username</label> -->
                                    <input type="email" class="form-control mb-0" id="username" name = "username" placeholder="Enter Your Username" required>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <!-- <label for="password">Password</label> -->
                                        <input type="password" class="form-control mb-0" id="password" name ="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="confirmpassword">ConfirmPassword</label> -->
                                        <input type="password" class="form-control mb-0" id= "confirmpassword" name = "confirmpassword" placeholder="Password">
                                    </div>
                                </div><br><br>
                                <div class="d-inline-block w-100">
                                    
                                    <button type="button" class="btn btn-primary float-right" onclick = "signup()">Sign Up</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="index.php">Log In</a></span>

                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        
       <?php
            require_once('js.php');
       ?>
    

     <script>
        $(document).ready(function(){
            $("#fullname").focus();
        });
        function signup(){

            var Name = $("#name").val().trim();
            var email = $("#email").val().trim();
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();
            var confirmpassword = $("#confirmpassword").val().trim()    ;   

           
            if(Name == '' || username == ''   || email == '' || password == '' || confirmpassword == '' )
            {
                alert("Please Fill Up Your Details"); 
            }
            else
            {
                if(password != confirmpassword)
                {
                    alert("Password Mismatch");
                  }
                  else
                  {
                    var feedback = confirm("Are You Sure You Want to Create Account");
                    var data = $("form#signup")[0];
                    
                    var formData = new FormData(data);
                   
                     if(feedback == true)
                     {
                        $.ajax({                                
                        url: "adminSignup.php",
                              
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (e) 
                        {
                            if(e == 1)
                            {
                                alert("You Have Successfully Signed Up");
                                window.location.href="index.php";
                                ClearFields();
                            }
                            else if(e == 0) 
                            {
                                alert("Username already exist");
                                $("#username").focus();
                                
                            }
                            else
                            {
                                alert(e);
                            }
                        }
                     });
                  }

                        
               }
            }

        }
        function ClearFields(){            
            $("#fullname").val('');
            $("#username").val('');
            $("#email").val('');
            $("#password").val('');
            $("#confirmpassword").val('');
        }
    </script>
   </body>


</html>