<!doctype html>
<html lang="en">
   
    
    <head>
      <!-- Required meta tags -->
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
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container bg-white mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-sm-8 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">SIGN IN ADMIN</h1>
                            <!-- <p>Enter your email address and password to access admin panel.</p> -->
                            <form class="mt-4" id = "signin">
                                <div class="form-group">
                                    <!-- <label for="email">Email address</label> -->
                                    <input type="username" class="form-control mb-0" id="username" name = "username" placeholder="Your username" required>
                                </div>
                                <div class="form-row">
                                    <div class= "col-md-12">
                                        <a href="#" class="float-right" style = "visibility:hidden">Forgot password?</a>
                                        <input type="password" class="form-control mb-0" id="password" name = "password" placeholder="Password" required>
                                    </div>
                                    <!-- <div class= "col-md-6">
                                        <a href="#" class="float-right">Forgot password?</a>
                                        <input type="password" class="form-control mb-0" id="cpassword" name = "cpassword" placeholder="Confirm password" required>
                                    </div> -->
                                </div><br><br>
                                <div class="d-inline-block w-100">
                                    <!-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div> -->
                                    <button type="button" class="btn btn-primary float-right" onclick = "signin()">Sign in</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="sign-up.php">Sign up</a></span>
                                    <!-- <ul class="iq-social-media">
                                        <li><ua href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php


    require_once('js.php');

    ?>


    <script>
        $(document).ready(function(){
            $("#username").focus();
        })


        function signin(){
            var username = $("#username").val();
            var password = $("#password").val();

            if(username == ''|| password == ''){
                alert("Please all fields are required");
            }else{            
                var response = confirm("Are you sure you want to log in");
                if(response == true){
                    var formData = $("form#signin").serialize();
                    $.ajax({ 
                        type:"POST",
                        url: "processSignin.php",     
                        data:formData,
                        success:function(returnData)
                        {	
                            
                            if(returnData == 1)
                            {
                                alert("Login Successfully");
                                window.location.href="dashboard.php";
                            }
                            else
                            {
                                alert("Username/Password incorrect");
                                $("#username").focus();
                            }
                        }
                    });
                }
                   
            }
        }
        
        function ClearFields(){
        $("#email").val('');
        $("#password").val('');
        $("#cpassword").val('');
        $("username").val('');
        }
    </script>
   </body>

<!-- Mirrored from iqonic.design/themes/vito/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:30 GMT -->
</html>