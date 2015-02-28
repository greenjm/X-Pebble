<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/index.css">
	<script src="http://www.webstepbook.com/Cookie.js" type="text/javascript"></script>
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/index.js"></script>

	<link href="../images/X-Pebble Favicon.png" type="image/png" rel="icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
		<div id="log-wrapper">
			<div id="logHeader">
				<h1 align="center">Login</h1>
			</div>
			<div id="logForm" align="center">
				<label for="username"><h2>Username:</h2></label>
				<input type="text" name="username" autofocus />
				<br></br>
				<label for="password"><h2>Password:</h2></label>
				<input type="password" name="password" autofocus/>
				<br>
				<p style="display:none;" id="loginError">Invalid Username or Password</p><br>
				<div align="justify">
					<button type="submit" value="Sign in" onclick="login()">Sign In</button>
					<button id="register" type="submit" value="Register" onclick="openregister()">Register</button>
				</div>
			</div>
		</div>
		<div id="regWrapper" style="display:none">
			<div id="regHeader">
				<h1 align="center">Register</h1>
			</div>
			<div id="regForm">
				<table>
					<tr>
						<td><label for="first-name" >First Name:</label></td>
						<td><input type="text" name="first-name" autofocus/></td>
					</tr>
					<tr>
						<td><label for="last-name">Last Name:</label></td>
						<td><input type="text" name="last-name" autofocus/></td>
					</tr>
					<tr>
						<td><label for="email">E-mail:</label></td>
						<td><input type="email" name="email" autofocus/></td>
					</tr>
					<tr>
						<td><label for="pebbleid">Pebbble ID:</label></td>
						<td><input type="text" name="pebbleid" autofocus/></td>
					</tr>
					<tr>
						<td><label for="user">Username:</label></td>
						<td><input type="text" name="user" autofocus/></td>
					</tr>
					<tr>
						<td><label for="pass">Password:</label></td>
						<td><input type="password" name="pass" autofocus/></td>
					</tr>
					<tr>
						<td><label for="confirm">Confirm Password:</label></td>
						<td><input type="password" name="confirm" autofocus/></td>
					</tr>
					<tr>
						<td>
				</table>
				<div align="center"><button id="sign-up" type="submit" style="float: center" value="Sign Up" onclick="register()">Sign Up</button></div>
			</div>
		</div>
	</div>
</body>
</html>