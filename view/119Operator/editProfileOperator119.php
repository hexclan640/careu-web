<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileOperator119.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/119Operator/editProfileOperator119.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/operatorHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>Edit Profile</title>
</head>
<body>
	<?php include_once('../../includes/119operatorHeader.php'); ?>

	<div class="breadcrum">
		Edit Profile
	</div>

	<div class="form">
		<center>
			<form method="post" id="editProfile">
				<table class="info">
					<tr>
						<td class="proPic">
							<canvas class="picture" id="picture">
								
							</canvas>
						</td>
						<td class="labels">
							<label>First Name</label><br>
							<label>Last Name</label><br>
							<label>Password</label><br>
							<label>Re-enter Password</label><br>
						</td>
						<td class="inputs">
							<input type="text" name="firstName" id="firstName" value="<?php echo $records['firstName']; ?>"><br>
							<input type="text" name="lastName" id="lastName" value="<?php echo $records['lastName']; ?>"><br>
							<input type="password" name="password1" id="password1"value="<?php echo $records['password']; ?>"><br>
							<input type="password" name="password2" id="password2" value="<?php echo $records['password']; ?>"><br>
							<p class="hidden" id="error1">Passwords do not match!</p>
							<p class="hidden" id="error2">Please, fill the password feilds!</p>
						</td>
					</tr>
					<tr class="save">
						<td colspan="3">
							<input type="submit" value="Save" name="submit" id="submit">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
	<script type="text/javascript" src="../../js/editProfile.js"></script>
</body>
</html>