<?php
    extract($_POST);
    session_start();
    require_once("admin/dbconn.php");   
    

    $productUserUnique = $_SESSION['useruniquenumber'];

    $sql = "SELECT * FROM product_cart WHERE product_cart_id ='$productCartID' AND product_cart_user_order_status = 'F' AND product_cart_user_unique_id = '$productUserUnique'"; 
    
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $record_count = mysqli_num_rows($result);
    if($record_count > 0){
        $sql = "UPDATE product_cart SET product_quantity ='$productQuantity' WHERE product_cart_id = '$productCartID' AND product_cart_user_order_status = 'F' AND product_cart_user_unique_id = '$productUserUnique'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        if($result==true){
            $sql = "SELECT product_price FROM product_cart WHERE product_cart_id = '$productCartID' ORDER BY product_cart_id LIMIT 1";
            $result = mysqli_query($connection, $sql) or die(mysql_error());
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $product_price = $row['product_price'];            
            }
            echo $product_price;
        }else{
            echo -2;
        }
    }else{
        echo -1; 
    }       

?>