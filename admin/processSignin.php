<?php		
	require_once('dbconn.php');
	//start session
	session_start();
	
	extract($_POST);
	$username = trim($username);
	$password = md5(trim($password));
	$sql = "SELECT * FROM admin_arise WHERE admin_username ='$username'";
	$result = mysqli_query($connection,$sql);

	if(mysqli_num_rows($result) == 1)
	{
	
		$fetchRow    	= mysqli_fetch_array($result);
		
		$getUsername 	= $fetchRow['admin_username'];
		$getPassword 	= $fetchRow['admin_password'];

		
		if($getUsername == $username && $getPassword == $password)
		{
			$_SESSION['userinformation'] = $fetchRow;
			// echo $_SESSION['userinformation'];
			// exit;
			echo 1;
			
			
		}
		
	}			
	else
	{
		echo 0;
	}
	
?>
 