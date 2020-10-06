<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/userProfile.css">
	<link rel="stylesheet" type="text/css" href="../../css/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<title>User Profile</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="breadcrum">
		User Profile
	</div>

	<div class="user">
		<h2>User <?php echo $_GET['id']; ?></h2>
		<center>
			<table>
				<tr>
					<td class="reqHistory">
						<div>
							<center>
								<h2>Requests History</h2>
								<a href="">View</a>
							</center>
						</div>
					</td>
					<td class="feedHistory">
						<div>
							<center>
								<h2>Feedback History</h2>
								<a href="">View</a>
							</center>
						</div>
					</td>
				</tr>
			</table>
		</center>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>