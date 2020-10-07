<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/1990Operator/viewNewRequest.css">
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
					<!-- <div class="request"> -->
						<div class="details">
							Request Details
						</div>
					<!-- </div> -->
				</td>
			</tr>
			<tr>
				<td>
					<textarea class="message" placeholder="Type..."></textarea>
					<a href="" class="send">Send</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="" class="accept">Accept</a>
					<a href="" class="reject">Reject</a>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>