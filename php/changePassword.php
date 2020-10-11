<?php
	if (isset($_POST['username']) && isset($_POST['password1']) || isset($_POST['password2']))
	{		
		$connection=mysqli_connect('localhost','root','','careu');
		$userName=mysqli_real_escape_string($connection,$_POST['username']);
		$password=mysqli_real_escape_string($connection,$_POST['password1']);

		$query="UPDATE admins
				SET password='{$password}'
				WHERE userName='{$userName}'";
		$adminInfo=mysqli_query($connection,$query);

		if($adminInfo>0)
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