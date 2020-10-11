<?php
	session_start();
	$connection = mysqli_connect('localhost','root','','careu');
	if(!isset($_POST['submit']))
	{
		$query="SELECT firstName,lastName,password
				FROM admins
				WHERE userName='{$_SESSION['userName']}'";
		$adminInfo=mysqli_query($connection,$query);

		if($adminInfo)
		{
			$records=mysqli_fetch_assoc($adminInfo);
		}
	}

	if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['password1']) || isset($_POST['password2']))
	{		

		$firstName=mysqli_real_escape_string($connection,$_POST['firstName']);
		$lastName=mysqli_real_escape_string($connection,$_POST['lastName']);
		$password=mysqli_real_escape_string($connection,$_POST['password1']);

		$query="UPDATE admins
				SET firstName='{$firstName}',lastName='{$lastName}',password='{$password}'
				WHERE userName='{$_SESSION['userName']}'";
		$adminInfo=mysqli_query($connection,$query);

		if($adminInfo> 0)
     	{	
    		echo "success";
    		exit;
      	}
      	else
      	{
      		echo "failed";
      		exit;
      	}
	}
 ?>