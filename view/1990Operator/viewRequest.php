<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/1990Operator/viewRequest.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/operatorHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>Request <?php echo $_GET['id']; ?></title>
</head>
<body>
	<?php include_once('../../includes/1990operatorHeader.php'); ?>

	<div class="breadcrum">
		Request <?php echo $_GET['id']; ?>
	</div>

	<div class="reqDetails">
		<table>
			<tr>
				<td>
					<div class="details">
						Request Details
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="feedback">
						Feedback
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>