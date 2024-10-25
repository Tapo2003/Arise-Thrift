<?php
    session_start();
    require_once('dbconn.php');
      
    $picture_State = $_POST['picture_hidden_tag'];
    $aboutDescription = mysqli_real_escape_string($connection, $_POST["abt_description"]);
    $aboutId =   $_POST['aboutId'];
    
    
    $_SESSION['product_content'] = $aboutDescription;
    
    
    $sql = "SELECT * FROM about_arise";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        if($picture_State == "T"){
            $sql = "UPDATE about_arise SET image_tag = 'T', about_content = '$aboutDescription' WHERE about_id = '$aboutId'";
           
            
            $result = mysqli_query($connection, $sql);
            if($result == true){
                
                $sql = "SELECT about_id FROM about_arise";
                
                $result = mysqli_query($connection, $sql) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);  
                $aboutId = $row['about_id'];

                
                $upload_dir = 'about_image';

                if(is_dir($upload_dir)){
                    //Directory already exist
                }else{//create the directory
                    mkdir($upload_dir);
                } 

                $targetFile  = $upload_dir.'/'.$aboutId.'.jpg';                

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
            $sql = "UPDATE about_arise SET  about_content = '$aboutDescription'";
            $result = mysqli_query($connection, $sql);
            if($result == true){
                echo 2;
            }else{
                echo -2;
            }           
        }
    }else{
        if($picture_State == "T"){
            
            $sql = "INSERT INTO about_arise(about_id,about_content,image_tag) 
            VALUES(NULL,'$aboutDescription','$picture_State')";
           
            $result = mysqli_query($connection, $sql); 
           
            if($result == true){
                $sql = "SELECT about_id FROM about_arise";
                $result = mysqli_query($connection, $sql) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);  
                $aboutId = $row['about_id'];

                
                $upload_dir = 'about_image';

                if(is_dir($upload_dir)){
                    //Directory already exist
                }else{//create the directory
                    mkdir($upload_dir);
                }

                

                $targetFile  = $upload_dir.'/'.$aboutId.'.jpg';                

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
        
            $sql = "INSERT INTO about_arise(about_id,about_content,image_tag) 
            VALUES(NULL,'$aboutDescription','$picture_State')";
           
            $result = mysqli_query($connection, $sql);    
            if($result == true){
                echo  1;
            }else{
                echo  -1;//-1 is unable to insert record
            }           
        }
          
    }
   
?>