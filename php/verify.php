<?php 
	if(isset($_POST['submit']))
	{
		$userName=$_POST['username'];
		$password=$_POST['password'];

		$query="SELECT userName,password
				FROM admins
				WHERE userName='{$userName}'
				AND password='{$password}'";
		$adminInfo=mysqli_query($connection,$query);
     	if(mysqli_num_rows($adminInfo) > 0)
     	{	
     		session_start();
     		$_SESSION['userName']=$userName;
    		header( "Location:home.php" );die;
      	}
      	else
      	{
      		header( "Location:index.php" );die;	
      	}
		
	}