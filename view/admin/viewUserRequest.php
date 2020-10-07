<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
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
		Edit Profile
	</div>

	<div class="request">
		<h2>Request <?php echo $_GET['id']; ?></h2>
		<div class="reqDetails">
			Request Details
		</div>
		<dir class="verify">
			<a href="" class="cancel">Cancel Request</a>
			<a href="" class="accept">Accept Request</a>
		</dir>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>