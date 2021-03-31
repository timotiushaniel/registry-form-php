<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Timotius Haniel | Registry Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="Full Name">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="fullname" placeholder="Full Name" id="fullname" required>
				
                <label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>

                <label for="address">
					<i class="fas fa-home"></i>
				</label>
				<input type="text" name="address" placeholder="Address" id="address" required>

                <label for="phone_number">
					<i class="fas fa-phone"></i>
				</label>
				<input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" required>

                <label for="department">
					<i class="fas fa-briefcase"></i>
				</label>
				<input type="text" name="department" placeholder="Department" id="department" required>
				
				<input type="submit" value="Register">

				<a style="padding-top: 5px;" href="showdata.php">Show All Data</a>
			</form>
		</div>
	</body>
</html>