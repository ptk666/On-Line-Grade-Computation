<!DOCTYPE html>
<html>
<head>
	<title>Machine Problem #3 | PHP</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<style>
	hr {
		height: 1px;
		background-color: green;
	}
	h1 {
		color: green;
	}
	.input-group {
		padding-top: 10px;
	}
</style>

<?php

	$username = "admin";
	$password = "12345";
	$error = " ";

	if(isset($_POST['submit']))
	{
		if($_POST['username'] == $username)
		{
			if($_POST['password'] == $password)
			{
				header("Location: DataEntryDelaCruzBruceJames.php");
			}else {
				$error = "Incorrect Username or Password";
			}
		}else {
			$error = "Incorrect Username or Password";
		}
	}

?>

<body>
	<div>
		<form action="" method="post">
			<div class="container-fluid">
				<div class="form-row">
					<div class="col-sm-12">
						<center>
							<h1>RICHARD GWAPO UNIVERSITY</h1>
							<b><p>Forever Gwapo St., Mandaluyong City</p>
							<p>Telephone #: 143-4456</p></b>
						</center>

							<hr>
					</div>

					<div class="col-sm-4"></div>

					<div class="col-sm-4">
						
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Username:</span>
							</div>
								<input class="form-control" type="text" name="username" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Password:</span>
							</div>
								<input class="form-control" type="password" name="password" required>
						</div>

						<br>

						<center>
							<input class="btn btn-primary" type="submit" name="submit" value="Accept">
							<input class="btn btn-secondary ml-1" type="reset" name="clear" value="Reset">
						</center>

						<center class="mt-3">
							<p class="text-danger"><b><?php echo $error; ?></b></p>
						</center>

					</div>

					<div class="col-sm-4"></div>

				</div>
			</div>
		</form>
	</div>
</body>
</html>