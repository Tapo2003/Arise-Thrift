<?php
    session_start();
    $useruniquenumber = $_SESSION['useruniquenumber']; 
    require_once('admin/dbconn.php');
    extract($_POST);
    
    $sql = "SELECT * FROM product_cart WHERE product_cart_user_unique_id = '$useruniquenumber' AND 	product_cart_user_order_status = 'F'";


    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        $recordcount = 0; $tablerow = '';
        $price_total  = 0;

        while($row = mysqli_fetch_assoc($result)){
            $recordcount ++;
            $productName = $row['product_name'];
            $productAmount = $row['product_price'];
            $productQuantity = $row['product_quantity'];
            $productTotal  =  $productAmount *  $productQuantity;
            $productAmount = number_format($productAmount);
            $price_total = $price_total + $productTotal;
            // $price_total  = number_format($price_total);
            // $productTotal  = number_format( $productTotal);
            $tablerow .= "<tr >";
        
                $tablerow .= "<td style = 'border:solid 2px black'>$recordcount</td>";
                $tablerow .= "<td style = 'border:solid 2px black'>$productName</td>";
                $tablerow .= "<td style = 'border:solid 2px black'>&#8358;$productAmount</td>";
                $tablerow .= "<td style = 'border:solid 2px black'>$productQuantity</td>";
                $tablerow .= "<td style = 'border:solid 2px black'>&#8358; $productTotal</td>";
                // $tablerow .= "<td>$grandTotal</td>";
            
            $tablerow .= "</tr>";
        
        }   
        $tablerow .= "<tr><td style = 'border:solid 2px black'></td><td style = 'border:solid 2px black'></td><td style = 'border:solid 2px black'></td><td style='font-size:20px;font-weight:bold'>Grand Total:</td><td style = 'border:solid 2px black'><span id='Gtotal' style='font-size:20px;font-weight:bold'>&#8358; $price_total </span></td></tr>";    
    }else{
        $tablerow = 0;
    }
    echo $tablerow;
    
   
?>
