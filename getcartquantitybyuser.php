<?php
    session_start();

    if(isset($_SESSION['useruniquenumber']) && !empty($_SESSION['useruniquenumber'])){
        $useruniquenumber = $_SESSION['useruniquenumber']; 
    }else{
        //do nothing
        if($pagename == 'men-boots.php'){ 
            header("Location:men-boots.php");
        }else{
            header("Location:women-boots.php");
        }
        header("Location:men-boots.php");//default page
    }
    require_once("admin/dbconn.php");
        $sql = "SELECT * FROM product_cart WHERE product_cart_user_unique_id= '$useruniquenumber' && product_cart_user_order_status= 'F'";
            $result = mysqli_query($connection,$sql) or die(mysql_error());	
            $recordNum = mysqli_num_rows($result);
            echo $recordNum;
        
?>