<?php
    require_once('dbconn.php');
    
    extract($_POST);
    $productIdProductPage = explode("-", $productid);
    
    $productId            = $productIdProductPage[0];
    $pageName             = $productIdProductPage[1];

   
    if($pageName == 'viewFemaleProduct.php'){
    
        $sql = "SELECT * FROM female_products WHERE product_id = '$productId'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $row_count = mysqli_num_rows($result);
        if($row_count == 1){
            $row = mysqli_fetch_assoc($result);
            // $productCategory = $row['product_categories'];
            $myArray = [
                'productid' => $row['product_id'],
                // 'Fullname' => $row['Fullname'],
                 'p_name' => $row['product_name'],
                 'brand_name' => $row['brand_name'],
                 'p_price' => $row['product_price'],
                 'p_category' => $row['product_categories'],
                 'p_description' => $row['product_description'],
                 'imagetag'=>$row['imagetag']
            ];
        }else{
            $myArray = 0; 
        }
        echo json_encode($myArray);
    }else if($pageName == 'viewMaleProduct.php'){
        
        $sql = "SELECT * FROM male_products WHERE product_id = '$productId'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $row_count = mysqli_num_rows($result);
        if($row_count == 1){
            // $recordcount = 0; $tablerow = '';
            $row = mysqli_fetch_assoc($result);
            $productCategory = $row['product_categories'];
            // echo $productCategory;
            $myArray = [
                'productid' => $row['product_id'],
                // 'Fullname' => $row['Fullname'],
                 'p_name' => $row['product_name'],
                 'brand_name' => $row['brand_name'],
                 'p_price' => $row['product_price'],
                 'p_category' => $row['product_categories'],
                 'p_description' => $row['product_description'],
                 'imagetag'=>$row['imagetag']
            ];
        }else{
            $myArray = 0; 
        }
        echo json_encode($myArray);
    }
    {
        
     }
   
   
?>




	