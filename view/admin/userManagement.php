<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
<!-- <?php include_once('../../php/admin/userRequests.php'); ?> -->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/admin/userManagement.css">
	<link rel="stylesheet" type="text/css" href="../../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>User Management</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="breadcrum">
		Manage Users
	</div>

	<div class="users">
		<table class="table">
			<tr>
				<td>
					<h2>Requests</h2>
					<div class="div1" id="div1">
					
					</div>
				</td>
				<td>
					<h2>Users</h2>
					<div class="div2" id="div2">
						
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>

	<script type="text/javascript" src="../../js/userManagement.js"></script>
</body>
</html>