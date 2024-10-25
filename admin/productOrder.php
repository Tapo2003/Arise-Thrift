<?php
   session_start();

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
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Product Ordered</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope = "col">Customer Email</th>
                                    <th scope="col">Product Ordered</th>
                                    <th scope="col">Product Amount</th>
                                    <th scope="col">Order Reference</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Time Ordered</th>
                                 </tr>


                              </thead>
                              <tbody id='tblAccount'>
                           
                              </tbody>
                           </table>
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
               
                $.get('getProductOrder.php').done(function(feedback){
                  //   alert(feedback);
                    if(feedback == 0){
                        // do nothing
                    }else{
                        $("#tblAccount").html(feedback);
                    }
                });
            }
        
            // function deleteProduct(getThis){     
            
            //    var productId = getThis.id;
            //    var productId = 'productid='+productId;
            
         
            //    var response = confirm("You sure you want to delete product ?")
            //    if(response == true){
            //       $.post("deleteProduct.php", productId).done(function(returndata){
            //          alert(returndata);
            //          if(returndata == 1){
            //             alert("Product deleted successfully");
                        
            //          }else if(returndata == -1){
            //             alert("Unable to delete product");
            //          }else{
            //             alert(returndata);
            //          }
            //       });
            //    }
                 
            // }

    

           

            
      </script>
   </body>

<!-- Mirrored from iqonic.design/themes/vito/html/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:16 GMT -->
</html>