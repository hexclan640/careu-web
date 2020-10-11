<?php 
	/*if(isset($_POST['submit']))
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
    		header( "Location:view/admin/home.php" );die;
      	}
      	else
      	{
      		header( "Location:index.php" );die;	
      	}
		
	}*/

	$connection = mysqli_connect('localhost','root','','careu');

	if (isset($_POST['username']) && isset($_POST['password']))
	{		

		$userName=mysqli_real_escape_string($connection,$_POST['username']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);

		$query="SELECT userName,password
				FROM admins
				WHERE userName='{$userName}'
				AND password='{$password}'";

		$adminInfo=mysqli_query($connection,$query);

		if(mysqli_num_rows($adminInfo) > 0)
     	{	
     		session_start();
     		$_SESSION['userName']=$userName;
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