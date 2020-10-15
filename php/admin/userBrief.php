<?php 
	$connection = mysqli_connect('localhost','root','','careu');

	$query1="SELECT userID,firstName,lastName,NIC
			FROM users ORDER BY userID DESC;";
	
	$userInfo=mysqli_query($connection,$query1);

	echo "<table>";
		while($row2 = mysqli_fetch_assoc($userInfo))
		{
			echo '<tr>';
				echo '<div class="user">';
					echo "<h3>".$row2["firstName"]." ".$row2["lastName"]."</h3>";
					echo $row2["NIC"];
					echo '<a href="userProfile.php?id='.$row2["userID"].'">View</a>';
				echo '</div>';
			echo '</tr>';
		}
	echo "</table>";
?>