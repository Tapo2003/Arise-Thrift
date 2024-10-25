<?php

    require_once("admin/dbconn.php");
    extract($_POST);
    
    $email   = trim($email);
    $message = trim($message);
    $name    = trim($name);
    $phone   = trim($phone);
    
    
    $sql= "SELECT * FROM arise_contact  WHERE contact_email = '$email'";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) ==0){
        $sql = "INSERT INTO arise_contact(contact_id,contact_name,contact_email,contact_phone,contact_message) VALUES(NULL,'$name','$email','$phone','$message')";
        $result = mysqli_query($connection, $sql);
        if($result==true){
            echo 1;
        }else{
            echo 0;
        }
    }else{
        echo 3;
    }


?>

