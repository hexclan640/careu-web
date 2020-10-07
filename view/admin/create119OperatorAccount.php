<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/admin/create119OperatorAccount.css">
	<link rel="stylesheet" type="text/css" href="../../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>119 Operator Account</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="breadcrum">
		119 Operator Account
	</div>

	<div class="form">
		<center>
			<form action="" method="post">
				<table class="info">
					<tr>
						<td class="proPic">
							<img src="../../img/admin.jpg">
						</td>
						<td class="labels">
							<label>User Name</label><br>
							<label>First Name</label><br>
							<label>Last Name</label><br>
							<label>Password</label><br>
							<label>Re-enter Password</label><br>
						</td>
						<td class="inputs">
							<input type="text" name="userName"><br>
							<input type="text" name="fName"><br>
							<input type="text" name="lName"><br>
							<input type="password" name="password1"><br>
							<input type="text" name="password2"><br>
						</td>
					</tr>
					<tr class="save">
						<td colspan="3">
							<input type="submit" value="Create Account" name="submit">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>