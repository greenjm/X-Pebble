<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/index.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>

	<link href="../images/fav.gif" type="image/gif" rel="shortcut icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
		<div id="log-wrapper">
			<div id="loginHeader">
				<h1 align="center">Login</h1>
			</div>
			<div id="logForm" align="center">
				<label for="username"><h2>Username:</h2></label>
				<input type="text" name="username" autofocus />
				<br>
				<br>
				<label for="password"><h2>Password:</h2></label>
				<input type="password" name="password" autofocus/>
				<br>
			</div>
		</div>
	</div>
</body>
</html>