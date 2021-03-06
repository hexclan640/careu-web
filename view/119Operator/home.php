<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/119Operator/home.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/operatorHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>Home</title>
</head>
<body>
	<?php include_once('../../includes/119operatorHeader.php'); ?>

	<div class="tasks">
		<table>
			<tr>
				<td>
					<div>
						<a href="recentRequests.php" type="submit" class="recentReq"><p>Recenet Requests</p><img src="https://img.icons8.com/color/96/000000/add-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="allRequests.php" type="submit" class="allReq"><p>All Requests</p><img src="https://img.icons8.com/color/96/000000/add-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="editProfileOperator119.php" type="submit" class="editPro"><p>Edit Profile</p><img src="https://img.icons8.com/color/96/000000/checked-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="reports.php" type="submit" class="report"><p>Generate Reports</p><img src="https://img.icons8.com/color/96/000000/fine-print.png"/></a>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>