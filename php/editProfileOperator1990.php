<?php
	session_start();
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

	if(isset($_POST['submit']))
	{
		if($_POST['password1']==$_POST['password2'])
		{
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$password=$_POST['password1'];

			$query="UPDATE admins
					SET firstName='{$firstName}',lastName='{$lastName}',password='{$password}'
					WHERE userName='{$_SESSION['userName']}'";
			$adminInfo=mysqli_query($connection,$query);

	     	if($adminInfo)
	     	{	
	    		header( "Location:home.php" );die;
	      	}
		}
		else
		{
			header( "Location:editProfileAdmin.php" );die;
		}
	}
 ?>