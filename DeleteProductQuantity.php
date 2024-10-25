<?php
    extract($_POST);
    session_start();
    require_once("admin/dbconn.php");   
    
    
    $productUserUnique = $_SESSION['useruniquenumber'];

    
    $sql = "SELECT * FROM product_cart WHERE product_cart_id ='$CartId' AND product_cart_user_order_status = 'F' AND product_cart_user_unique_id = '$productUserUnique'"; 
    
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $record_count = mysqli_num_rows($result);
    if($record_count > 0){
        $sql = "DELETE FROM product_cart WHERE product_cart_id = '$CartId' AND product_cart_user_unique_id = '$productUserUnique'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        if($result==true){
            echo 2;
        }else{
            echo -2;
        }
    }else{
        echo -1; 
    }       

?>