<?php
    extract($_POST);
    session_start();
   
    $btnData = explode("~", $btnData);
    $productid = trim($btnData[0]);
    $pagename = trim($btnData[1]);
    $quantity = 1;
    
   
    if(isset($_SESSION['useruniquenumber']) && !empty($_SESSION['useruniquenumber'])){
        $useruniquenumber = $_SESSION['useruniquenumber'];
       
    }else{
        //do nothing
        if($pagename == 'men-boots.php'){ 
            header("Location:men-boots.php");
           
        }else{
            // header("Location:men-boots.php");
            header("Location:women-boots.php");
        }
        header("Location:men-boots.php");
    }
   
    require_once("admin/dbconn.php");
    
    if($pagename == 'men-boots.php' || $pagename == 'viewMaleProduct.php' || $pagename == 'men-sweatshirt.php' || $pagename == 'men-cargo-pant.php'|| $pagename == 'men-leather-pant.php' || $pagename == 'maleSearch.php'){
            $sql 	= "SELECT * FROM product_cart WHERE product_male_id ='$productid' AND product_cart_user_unique_id= '$useruniquenumber' && product_cart_user_order_status = 'F'";
            $result = mysqli_query($connection,$sql) or die(mysql_error());	
            $recordNum = mysqli_num_rows($result);
        if (mysqli_num_rows($result) == 0){
            $sql = "SELECT * FROM male_products WHERE product_id = '$productid'";
            $result = mysqli_query($connection, $sql) or die(mysql_error());
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $productName = $row['product_name'];
                $brandName = $row['brand_name'];
                $productPrice = $row['product_price'];
                $productId =    $row['product_id'];
                $productCategories = $row['product_categories'];
                $productDescription = $row['product_description'];
                $productImage		  = "admin/male products/".$productId.".jpg";
            }

            $sql = "INSERT INTO product_cart(product_cart_id, product_male_id, product_female_id,  product_name, product_price, product_description, brand_name,productCategories,product_image,product_quantity, product_cart_user_unique_id, product_cart_user_order_status) 
            VALUES(NULL, '$productId', NULL,  '$productName', '$productPrice','$productDescription','$brandName','$productCategories','$productImage','$quantity', '$useruniquenumber', 'F')";
            $result = mysqli_query($connection, $sql);
            $alertBuilder = "";
            if($result == true){
                $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                    $alertBuilder .= "<div class='alert alert-success alert-dismissible' style = 'text-align:center'>";
                        $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        $alertBuilder .= "<strong>Record</strong> Inserted Successfully.";
                    $alertBuilder .= "</div>";
                $alertBuilder .= "</div>";

                $response = [
                    'builder' => $alertBuilder, 
                    'status' => 1
                ];
                
                echo json_encode($response);

            }else{ 
                $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                    $alertBuilder .= "<div class='alert alert-success alert-dismissible' style = 'text-align:center'>";
                        $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        $alertBuilder .= "<strong>Record</strong>Existed 
                        Already";
                    $alertBuilder .= "</div>";
                $alertBuilder .= "</div>";

                $response = [
                    'builder' => $alertBuilder, 
                    'status' => 0
                ];
                echo json_encode($response);
               
            }
        }else{
            $alertBuilder = "";
            $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                $alertBuilder .= "<div class='alert alert-danger alert-dismissible' style = 'text-align:center'>";
                    $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    $alertBuilder .= "<strong>Product</strong> Already Exist.";
                $alertBuilder .= "</div>";
            $alertBuilder .= "</div>";

            $response = [
                'builder' => $alertBuilder, 
                'status' => -1
            ];
            echo json_encode($response);
        }
    }else if($pagename == 'women-boots.php' || $pagename == 'viewFemaleProduct.php' || $pagename == 'women.shoes.php' || $pagename == 'women-sweatshirts.php' || $pagename == 'women-sweatshirts.php' || $pagename == 'luxury-bags.php' || $pagename == 'leather-wears.php' || $pagename == 'skirt.php' || $pagename == 'bum-short.php' || $pagename == 'femaleSearch.php'){
        
        
        $sql 	= "SELECT * FROM product_cart WHERE product_female_id ='$productid' AND product_cart_user_unique_id= '$useruniquenumber' && product_cart_user_order_status = 'F'";
        
        $result = mysqli_query($connection,$sql) or die(mysql_error());	
        $recordNum = mysqli_num_rows($result);
        if(mysqli_num_rows($result) == 0){
            $sql = "SELECT * FROM female_products WHERE product_id = '$productid'";
            $result = mysqli_query($connection, $sql) or die(mysql_error());
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $productName = $row['product_name'];
                $brandName = $row['brand_name'];
                $productPrice = $row['product_price'];
                $productId =    $row['product_id'];
                $productCategories = $row['product_categories'];
                $productDescription = $row['product_description'];
                // $imageTag  =     $row['imagetag'];
                $productImage		  = "admin/female products/".$productId.".jpg";
            
            }
            
            $sql = "INSERT INTO product_cart(product_cart_id, product_female_id, product_male_id,  product_name, product_price, product_description, brand_name,productCategories,product_image,product_quantity, product_cart_user_unique_id, product_cart_user_order_status) 
            VALUES(NULL, '$productId', NULL,  '$productName', '$productPrice','$productDescription','$brandName','$productCategories','$productImage','$quantity', '$useruniquenumber', 'F')";
            $result = mysqli_query($connection, $sql);
            $alertBuilder = "";
            echo 4;
            exit;
            if($result == true){             
                $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                    $alertBuilder .= "<div class='alert alert-success alert-dismissible' style = 'text-align:center'>";
                        $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        $alertBuilder .= "<strong>Record</strong> Inserted Successfully.";
                    $alertBuilder .= "</div>";
                $alertBuilder .= "</div>";

                $response = [
                    'builder' => $alertBuilder, 
                    'status' => 1
                ];
                echo json_encode($response);
            }else{  
                $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                    $alertBuilder .= "<div class='alert alert-success alert-dismissible' style = 'text-align:center'>";
                        $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        $alertBuilder .= "<strong>Error</strong>Inserting";
                    $alertBuilder .= "</div>";
                $alertBuilder .= "</div>";

                $response = [
                    'builder' => $alertBuilder, 
                    'status' => 0
                ];
                echo json_encode($response);
            }
        }else{
            $alertBuilder = "";
            $alertBuilder .= "<div class='container' style = 'margin-top:20px'>";
                $alertBuilder .= "<div class='alert alert-danger alert-dismissible' style = 'text-align:center'>";
                    $alertBuilder .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    $alertBuilder .= "<strong>Record </strong>Exist Already.";
                $alertBuilder .= "</div>";
            $alertBuilder .= "</div>";

            $response = [
                'builder' => $alertBuilder, 
                'status' => -1
            ];
            echo json_encode($response);

        }
    }
    
?>
    