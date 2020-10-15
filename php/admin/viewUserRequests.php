<?php 
	$connection = mysqli_connect('localhost','root','','careu');

	if(isset($_POST["accept"]))
	{
		$query3="INSERT INTO users (firstName,lastName,email,phoneNumber,userName,password,NIC,address,relative1,relativePhone1,relative2,relativePhone2,relative3,relativePhone3) SELECT firstName,lastName,email,phoneNumber,userName,password,NIC,address,relative1,relativePhone1,relative2,relativePhone2,relative3,relativePhone3 FROM requests WHERE requestID='{$_GET["rid"]}'";

		$query4="DELETE FROM requests WHERE requestID='{$_GET["rid"]}'";

		if(mysqli_query($connection,$query3))
		{
			if(mysqli_query($connection,$query4))
			{
				header( "Location:userManagement.php" );die;
			}
		}
	}

	if(isset($_POST["reject"]))
	{
		$query5="DELETE FROM requests WHERE requestID='{$_GET["rid"]}'";
		
		if(mysqli_query($connection,$query5))
		{
			header( "Location:userManagement.php" );die;
		}
	}

	$query1="SELECT firstName,lastName,email,phoneNumber,userName,password,NIC,address,relative1,relativePhone1,relative2,relativePhone2,relative3,relativePhone3
			FROM requests
			WHERE requestID='{$_GET["rid"]}'";
	
	$requestsInfo=mysqli_query($connection,$query1);
	$row = mysqli_fetch_assoc($requestsInfo);
?>