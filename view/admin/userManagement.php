<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/userManagement.css">
	<link rel="stylesheet" type="text/css" href="../../css/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
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
					<div class="div1">
						<table class="requests">
							<tr>
								<div class="request">
									Request 1
									<a href="viewUserRequest.php?id=1">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 2
									<a href="viewUserRequest.php?id=2">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 3
									<a href="viewUserRequest.php?id=3">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 4
									<a href="viewUserRequest.php?id=4">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 5
									<a href="viewUserRequest.php?id=5">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 6
									<a href="viewUserRequest.php?id=6">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 7
									<a href="viewUserRequest.php?id=7">View</a>
								</div>
							</tr>
							<tr>
								<div class="request">
									Request 8
									<a href="viewUserRequest.php?id=8">View</a>
								</div>
							</tr>
						</table>
					</div>
				</td>
				<td>
					<h2>Users</h2>
					<div class="div2">
						<table class="verifiedUsers">
							<tr>
								<div class="user">
									User 1
									<a href="userProfile.php?id=1">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 2
									<a href="userProfile.php?id=2">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 3
									<a href="userProfile.php?id=3">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 4
									<a href="userProfile.php?id=4">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 5
									<a href="userProfile.php?id=5">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 6
									<a href="userProfile.php?id=6">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 7
									<a href="userProfile.php?id=7">View</a>
								</div>
							</tr>
							<tr>
								<div class="user">
									User 8
									<a href="userProfile.php?id=8">View</a>
								</div>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>