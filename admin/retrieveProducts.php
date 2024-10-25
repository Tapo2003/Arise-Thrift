<?php
        
    require_once('dbconn.php');
    
    extract($_POST);

    $productPage = explode("-",$getProduct);
    $getProduct = $productPage[0];
    $pagename =   $productPage[1];
    $getProduct = trim($getProduct);
    
    
    if($pagename == 'uploadMaleProduct.php'){
        $sql = "SELECT * FROM male_products WHERE product_name ='$getProduct'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $row_count = mysqli_num_rows($result);
        if($row_count == 1){
            $row = mysqli_fetch_row($result);     
        }else{
            $row = 0;
        }
        echo json_encode($row);
    }else if($pagename == 'uploadFemaleProduct.php'){
    
        $sql = "SELECT * FROM female_products WHERE product_name ='$getProduct'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $row_count = mysqli_num_rows($result);
        if($row_count == 1){
            $row = mysqli_fetch_row($result);     
        }else{
            $row = 0;
        }
        echo json_encode($row);
    }
    
?>