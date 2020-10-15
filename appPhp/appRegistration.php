<?php
	$connection = mysqli_connect('localhost','root','','careu');

	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phoneNumber'];
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$NIC=$_POST['NIC'];
	$address=$_POST['address'];
	$relative1=$_POST['relative1'];
	$relativePhone1=$_POST['relativephone1'];
	$relative2=$_POST['relative2'];
	$relativePhone2=$_POST['relativephone2'];
	$relative3=$_POST['relative3'];
	$relativePhone3=$_POST['relativephone3'];

	$query1="SELECT email
			FROM requests
			WHERE email='{$email}'";
	$result=mysqli_query($connection,$query1);
	
	if($firstName!="" && $lastName!="" && $email!="" && $phoneNumber!="" && $userName!="" && $password!="" && $NIC!="" && $address!="" && $relative1!="" && $relativePhone1!="" && $relative2!="" && $relativePhone2!="" && $relative3!="" && $relativePhone3!="")
	{
		if(mysqli_num_rows($result)==0)
		{
			$query2="INSERT INTO requests
					(firstName,lastName,email,phoneNumber,userName,password,NIC,address,relative1,relativePhone1,relative2,relativePhone2,relative3,relativePhone3)
					VALUES
					('{$firstName}','{$lastName}','{$email}','{$phoneNumber}','{$userName}','{$password}','{$NIC}','{$address}','{$relative1}','{$relativePhone1}','{$relative2}','{$relativePhone2}','{$relative3}','{$relativePhone3}')";

		    if(mysqli_query($connection,$query2))
		    {	
		    	echo "Added";
		    }
		    else
		    {
		    	echo "Something went wrong. Try again!";
		    }
		}
		else
		{
			echo "This email allready is registered. Try with another!";
		}
	}
	else
	{
		echo "Please fill all the feilds.";
	}
	
	mysqli_close($connection);
?>