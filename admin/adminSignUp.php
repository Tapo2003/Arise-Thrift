<?php
	
	require_once('dbconn.php');
	
	extract($_POST);	
	$Name = trim($name);
	$email    = trim($email);
	$username = trim($username);
	$password = md5(trim($password));

	// admin_userid	admin_name	admin_email	admin_username	admin_password	
	$sql = "SELECT * FROM admin_arise WHERE admin_username ='$username'";
	$result = mysqli_query($connection, $sql);
	if(mysqli_num_rows($result) ==0){


		$sql = "INSERT INTO admin_arise(admin_userid,admin_name,admin_email,admin_username,admin_password) 
		VALUES(Null,'$Name','$email','$username','$password')";

		
		$result = mysqli_query($connection, $sql);
		if($result == true)
		{
			echo 1;
		}
		else{
			echo -1;
		}
	}else{
		echo 0;
	}			 	
			 
	
?>				
