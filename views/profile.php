<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/profile.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>

	<link href="../images/fav.gif" type="image/gif" rel="shortcut icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
		
		<div class="profile">
			<div class="left">
				<h1 id="username">User Name:</h1>
				<h2 id="pebbleid">Pebble ID Number:</h2>
			</div>
			<div class="right">
				<div id="my-stats">
					<h1>My Stats</h1>
				</div>
			</div>
			<div id="myWorkoutsHeader">
				<div id="my-title">
					<h1>My Workouts</h1>
				</div>
			</div>
			<div id="myWorkouts" class="gallery">
				<ul>
					<li>
						<img alt="pushup" src="../images/aero.gif"></img>
					</li>
					<li>
						<img alt="treepose" src="../images/yoga.gif"></img>
					</li>
					<li>
						<img alt="lunge" src="../images/stretch.gif"></img>
					</li>
					<li>
						<img alt="benchpress" src="../images/anaero.gif"></img>
					</li>
					<li>
						<img alt="pushup" src="../images/aero.gif"></img>
					</li>
					<li>
						<img alt="treepose" src="../images/yoga.gif"></img>
					</li>
				</ul>
			</div>
			<button><a href="workout.php">Create New Workout</a></button>
		</div>
		
		
		<div style="display:none;" id="blackBackground" onclick="closeViewer()"></div>
	</div>
	<script type="text/javascript">
		buildPage("");
	</script>
</body>
</html>