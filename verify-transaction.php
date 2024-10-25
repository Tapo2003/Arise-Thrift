<?php
  session_start();
  $userUniqueId  = $_SESSION['useruniquenumber'];
 
  
  $ref = $_GET['reference'];
  if($ref == ""){
    header("location:javascript://history.go(-1)");
  }
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_757e9e4f0072990d6126c1e909fc3fdc154a5754",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
0-
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
   
    $result = json_decode($response);
    
  }

  if($result->data->status == 'success'){
  
    $status = $result->data->status;
    $reference = $result->data->reference;
    $lname = $result->data->customer->last_name;
    $fname = $result->data->customer->first_name;
    $phone = $result->data->customer->phone;
    $fullname = $lname.'  '.$fname;
    $cus_email = $result->data->customer->email;
    date_default_timezone_set('Africa/Lagos');
    $Date_time = date('m/d/Y h:i:s a', time());

    require_once("admin/dbconn.php");

    $sql = "SELECT * FROM product_cart WHERE product_cart_user_order_status = 'F' AND product_cart_user_unique_id = '$userUniqueId' ORDER BY product_cart_id	 DESC";

    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $record_count = mysqli_num_rows($result);

    $price_total  = 0;  
    while($row = mysqli_fetch_assoc($result)){
      $productName      = $row['product_name'];
      $productQuantity  = $row['product_quantity'];
      $product_price	  = $row["product_price"];
      $product_quantity	              = $row["product_quantity"];
      $total_price = ($product_price *  $product_quantity);
      $totalAmount =   number_format($total_price);
      number_format($price_total += $total_price);
      $product_name[] = $productName .' ('. $productQuantity .') ';
    }
    $total_product = implode(',',$product_name);
    $subTotal =  number_format($price_total);
   
    if($record_count > 0 ){
        $sql = "UPDATE product_cart SET product_cart_user_order_status = 'T' WHERE product_cart_user_unique_id = '$userUniqueId'";
        $result = mysqli_query($connection, $sql);
        if($result == true){
            $sql = "INSERT INTO product_order(product_order_id,order_status,order_reference,customer_phone,customer_fullname,cutomer_email,order_product,order_time,order_product_amount) 
            VALUES(NULL, '$status','$reference','$phone','$fullname','$cus_email','$total_product','$Date_time','$subTotal')";
            $result = mysqli_query($connection, $sql);
            if($result == true){
              session_destroy();
              header("Location:index.php");
              exit;
            }else{
              header("Location:index.php?error=");
              exit;
            }
      }else {
        echo 3;
      }

    }
    
    
  }else{
    echo "<script>alert('error making payment')</script>";
  }
?>
