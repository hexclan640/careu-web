<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
<?php include_once('../../php/admin/viewUserRequests.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/admin/viewUserRequest.css">
	<link rel="stylesheet" type="text/css" href="../../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>View Requests</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="breadcrum">
		Request
	</div>

	<div class="request">
		<?php echo "<h2>".$row["firstName"]." ".$row["lastName"]."</h2>"; ?>
		<div class="reqDetails">
			<?php
				echo '<table>';

					echo '<tr>';
						echo '<td>';
							echo "<b>E-mail</b>";
						echo '</td>';
						echo '<td>';
							echo $row["email"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>NIC</b>";
						echo '</td>';
						echo '<td>';
							echo $row["NIC"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>Phone Number</b>";
						echo '</td>';
						echo '<td>';
							echo $row["phoneNumber"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>Address</b>";
						echo '</td>';
						echo '<td>';
							echo $row["address"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>Relative 1</b>";
						echo '</td>';
						echo '<td>';
							echo $row["relative1"];
							echo "<br>";
							echo $row["relativePhone1"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>Relative 2</b>";
						echo '</td>';
						echo '<td>';
							echo $row["relative2"];
							echo "<br>";
							echo $row["relativePhone2"];
						echo '</td>';
					echo '</tr>';

					echo '<tr>';
						echo '<td>';
							echo "<b>Relative 3</b>";
						echo '</td>';
						echo '<td>';
							echo $row["relative3"];
							echo "<br>";
							echo $row["relativePhone3"];
						echo '</td>';
					echo '</tr>';

				echo '</table>';
			?>
		</div>

		<div class="verify">
			<form action="viewUserRequest.php?rid=<?php echo $_GET["rid"]; ?>" method="post">
				<input type="submit" name="reject" class="reject" value="Reject Request">
				<input type="submit" name="accept" class="accept" value="Accept Request">
			</form>
		</div>

	</div>


	<?php include_once('../../includes/footer.php'); ?>
	
</body>
</html>