<?php

    require_once('dbconn.php');
    extract($_POST);
    
    $sql = "SELECT * FROM male_products";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        $recordcount = 0; $tablerow = '';
        

        while($row = mysqli_fetch_assoc($result)){
            $recordcount ++;
            $productName = $row['product_name'];
            $brandName = $row['brand_name'];
            $productCategory = $row['product_categories'];
            $productPrice = $row['product_price'];
            $productDescription = $row['product_description'];
            $productPrice  = number_format($productPrice);
           
            $productid = $row['product_id'];
            $button1 = "<button type='button' id='$productid' value='' class='btn btn-success' onclick='viewAccount(this)' style = 'width:60px; height:30px'>View Product</button>";
            $button2 = "<button type='button' id='$productid' value='' class='btn btn-danger' onclick='deleteProduct(this)' style = 'width:60px; height:30px; margin-top:5px'>Delete Product</button>";
            $buttons = $button1.' '.$button2;

            $tablerow .= "<tr>";
                $tablerow .= "<td>$recordcount</td>";
                $tablerow .= "<td>$productName</td>";
                $tablerow .= "<td>$brandName</td>";
                $tablerow .= "<td>$productCategory</td>";
                $tablerow .= "<td> &#8358; $productPrice</td>";
                $tablerow .= "<td>$productDescription</td>";
                $tablerow .= "<td>$buttons</td>";
            $tablerow .= "</tr>";
        }       
    }else{
        $tablerow = 0;
    }
    echo $tablerow;
?>