<?php

    require_once('dbconn.php');
   
      $picture_State = $_POST['picture_hidden_tag'];
      $productName = mysqli_real_escape_string($connection, $_POST["p_name"]);
      $brandName = mysqli_real_escape_string($connection, $_POST["brand_name"]);
      $productPrice = mysqli_real_escape_string($connection, $_POST["p_price"]);
      $productDescription = mysqli_real_escape_string($connection, $_POST["p_description"]);
      $productCategory = mysqli_real_escape_string($connection , $_POST["p_category"]);

     
    
    $sql = "SELECT * FROM female_products WHERE product_name = '$productName'";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        if($picture_State == "T"){
            $sql = "UPDATE female_products SET brand_name = '$brandName', imagetag = 'T', product_description = '$productDescription', product_categories = '$productCategory', product_price = $productPrice WHERE product_name ='$productName'";
            $result = mysqli_query($connection, $sql);
            if($result == true){
                
                $sql = "SELECT product_id FROM female_products WHERE product_name = '$productName'";
                
                $result = mysqli_query($connection, $sql) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);  
                $productid = $row['product_id'];

                
                $upload_dir = 'female products';

                if(is_dir($upload_dir)){
                    //Directory already exist
                }else{//create the directory
                    mkdir($upload_dir);
                } 

                $targetFile  = $upload_dir.'/'.$productid.'.jpg';                

                if(file_exists($targetFile))
                {
                    unlink($targetFile);//unlink php function deletes the file
                }
                
                if(move_uploaded_file($_FILES['userfile']['tmp_name'], $targetFile))//uploads the file in the directory
                {
                    echo 2;
                }else{
                    echo  -2;
                }
            }else{
                echo -2;
            }           
        }else{
            $sql = "UPDATE female_products SET  product_categories= '$productCategory', brand_name = '$brandName', product_price = '$productPrice', product_description = '$productDescription' WHERE product_name = '$productName'";
            $result = mysqli_query($connection, $sql);
            if($result == true){
                echo 2;
            }else{
                echo -2;
            }           
        }
    }else{
        if($picture_State == "T"){
            
            $sql = "INSERT INTO female_products(product_id,product_name,brand_name,product_price, product_categories,product_description,imagetag) 
            VALUES(NULL,'$productName','$brandName', '$productPrice', '$productCategory', '$productDescription', '$picture_State')";
           
            $result = mysqli_query($connection, $sql); 
           
            if($result == true){
                $sql = "SELECT product_id FROM female_products WHERE product_name='$productName'";
                $result = mysqli_query($connection, $sql) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);  
                $productId = $row['product_id'];

                
                $upload_dir = 'female products';

                if(is_dir($upload_dir)){
                    //Directory already exist
                }else{//create the directory
                    mkdir($upload_dir);
                }

                

                $targetFile  = $upload_dir.'/'.$productId.'.jpg';                

                if(file_exists($targetFile))
                {
                    unlink($targetFile);//unlink php function deletes the file
                }

                if(move_uploaded_file($_FILES['userfile']['tmp_name'], $targetFile))//uploads the file in the directory
                {
                    echo 1;
                }else{
                    echo -1;
                }

                
            }else{
                echo -1;
            }         
        }else{
        
            $sql = "INSERT INTO female_products(product_id,product_name,brand_name,product_price, product_categories,product_description,imagetag) 
            VALUES('','$productName','$brandName', '$productPrice', '$productCategory', '$productDescription', '$picture_State')";
           
           
            $result = mysqli_query($connection, $sql);    
            if($result == true){
                echo  1;
            }else{
                echo  -1;//-1 is unable to insert record
            }           
        }
          
    }
   
?>