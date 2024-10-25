<?php
    require_once('dbconn.php');
  
    extract($_POST);
    
    // $productId = trim($productid);
    $productIdName = trim($productid);
    $productIdName = explode("-", $productIdName);
    $productId     = trim($productIdName[0]);
    $pagename      = trim($productIdName[1]); 
    // $btnData = explode("~", $btnData);
    if($pagename == 'viewMaleProduct.php'){
        $sql = "SELECT * FROM male_products WHERE product_id ='$productId'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $record_count = mysqli_num_rows($result);
        if($record_count > 0){
            $sql = "DELETE FROM male_products WHERE product_id='$productId'";
            $result = mysqli_query($connection, $sql);
            if($result==true){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo -1; 
        }     
    }else if($pagename == 'viewFemaleProduct.php'){
        $sql = "SELECT * FROM female_products WHERE product_id ='$productId'";
        $result = mysqli_query($connection, $sql) or die(mysql_error());
        $record_count = mysqli_num_rows($result);
        if($record_count > 0){
            $sql = "DELETE FROM female_products WHERE product_id='$productId'";
            $result = mysqli_query($connection, $sql);
            if($result==true){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo -1; 
        }     
    }
    
       
       
    ?>