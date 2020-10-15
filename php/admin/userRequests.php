<?php 
	$connection = mysqli_connect('localhost','root','','careu');

	$query1="SELECT requestID,firstName,lastName,NIC
			FROM requests ORDER BY requestID DESC";
	
	$requestsInfo=mysqli_query($connection,$query1);

	echo "<table>";
		while($row1 = mysqli_fetch_assoc($requestsInfo))
		{
			echo '<tr>';
				echo '<div class="request">';
					echo "<h3>".$row1["firstName"]." ".$row1["lastName"]."</h3>";
					echo $row1["NIC"];
					echo '<a href="viewUserRequest.php?rid='.$row1["requestID"].'">View</a>';
				echo '</div>';
			echo '</tr>';
		}
	echo "</table>";
?>