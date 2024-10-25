<?php
    session_start();
    require_once('dbconn.php');
    extract($_POST);
    
    $sql = "SELECT * FROM product_cart";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        $recordcount = 0; $tablerow = '';
        

        while($row = mysqli_fetch_assoc($result)){
            $recordcount ++;
            $productName = $row['product_name'];
            $brandName = $row['brand_name'];
            $productCategory = $row['productCategories'];
            $productPrice = $row['product_price'];
            $productQuantity = $row['product_quantity'];
            $customerUniqueId = $row['product_cart_user_unique_id'];
            $productCartTimeStamp = $row['product_cart_timestamp'];
            $productCartid  = $row['product_cart_id'];
            $productPrice  = number_format($productPrice);
        

            $tablerow .= "<tr>";
                $tablerow .= "<td>$recordcount</td>";
                $tablerow .= "<td>$productName</td>";
                $tablerow .= "<td>$brandName</td>";
                $tablerow .= "<td>$productCategory</td>";
                $tablerow .= "<td>&#8358; $productPrice</td>";
                $tablerow .= "<td>$productQuantity</td>";
                $tablerow .= "<td>$customerUniqueId</td>";
                $tablerow .= "<td>$productCartTimeStamp</td>";
            $tablerow .= "</tr>";
        }       
    }else{
        $tablerow = 0;
    }
    echo $tablerow;
?>