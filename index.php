<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form class="w3-container" action="login/processRegister.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="staffId" placeholder="Staff ID" required>
					<input type="text" name="firstName" placeholder="First Name" required>
					<input type="text" name="lastName" placeholder="Last Name" required>
					<input type="text" name="icNumber" placeholder="Ic Number" required>
					<label style=font-size:13px;margin:4px>Date Of Birth:</label><input type="date" name="dateOfBirth" placeholder="Date Of Birth"required >
					<input type="text" name="contactNumber" placeholder="Contact Number" required>
					<input type="text" name="email" placeholder="Email" required="">
					<!--<input type="date" name="dateOfEmployment" placeholder="Date OF Employment" >-->
					<input type="text" name="position" placeholder="Enter Position" required>
					<input type="text" name="password" placeholder="Enter Password for login" required>
					<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="registerButton">REGISTER</button>
				</form>
			</div>

			<div class="login">
				<form class="w3-container" action="login/checkLogin.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username (Your Staff ID)" required="">
					<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
					<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="loginButton">LOGIN</button>
				</form>
			</div>
	</div>
</body>
</html>