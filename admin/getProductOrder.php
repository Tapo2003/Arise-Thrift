<?php
    session_start();
    require_once('dbconn.php');
    extract($_POST);
    
   
// product_order_id	


    $sql = "SELECT * FROM product_order";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        $recordcount = 0; $tablerow = '';
        

        while($row = mysqli_fetch_assoc($result)){
            $recordcount ++;
            $customerFullname = $row['customer_fullname'];
            $customerEmail = $row['cutomer_email'];
            $productOrdered = $row['order_product'];
            $productAmount = $row['order_product_amount'];
            $orderReference = $row['order_reference'];
            $orderStatus = $row['order_status'];
            $timeOrdered = $row['order_time'];
            
            $productAmount  = ($productAmount);
        

            $tablerow .= "<tr>";
                $tablerow .= "<td>$recordcount</td>";
                $tablerow .= "<td>$customerFullname</td>";
                $tablerow .= "<td>$customerEmail</td>";
                $tablerow .= "<td>$productOrdered</td>";
                $tablerow .= "<td>&#8358; $productAmount</td>";
                $tablerow .= "<td>$orderReference</td>";
                $tablerow .= "<td>$orderStatus</td>";
                $tablerow .= "<td>$timeOrdered</td>";
            $tablerow .= "</tr>";
        }       
    }else{
        $tablerow = 0;
    }
    echo $tablerow;
?>