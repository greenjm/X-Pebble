<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/profile.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/profiletabs.js"></script>

	<link href="../images/X-Pebble Favicon.png" type="image/png" rel="icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
		
		<div class="profile">
			<div class="info-wrapper">
				<div class="left">
					<h1 id="firstName">[First]</h1>
					<h1 id="lastName">[Last]</h1>
					<h2 id="username">[Username]</h2>
				</div>
			</div>
			<div class="data-wrapper">
				<div class="workout-wrapper">
					<div id="myWorkoutsHeader">
						<div id="wo-title">
							<h1>My Workouts</h1>
						</div>
					</div>
					<div id="woForm" class="list">
					</div>
					<button id="newwo"><a href="workout.php">Create New Workout</a></button>
				</div>
				<div class="stats-wrapper">
					<div id="myStatsHeader">
						<h1>My Stats</h1>
					</div>
					<div id="statForm">
						<div class="tabs">
							<ul class="tab-links">
								<li class="active"><a href="#aero">Aerobic</a></li>
								<li><a href="#anaer">Anaerobic</a></li>
								<li><a href="#yoga">Yoga</a></li>
								<li><a href="#stre">Stretching</a></li>
							</ul>
						<div class="tab-content">
							<div id="aero" class="tab active">
								<table>
									<tr>
										<td>Completed</td>
										<td></td>
									</tr>
									<tr>
										<td>Attempted</td>
										<td></td>
									</tr>
									<tr>
										<td>Percent Completion</td>
										<td></td>
									</tr>
									<tr>
										<td>Popularity</td>
										<td></td>
									</tr>
								</table>
							</div>
							<div id="anaer" class="tab">
								<table>
									<tr>
										<td>Completed</td>
										<td></td>
									</tr>
									<tr>
										<td>Attempted</td>
										<td></td>
									</tr>
									<tr>
										<td>Percent Completion</td>
										<td></td>
									</tr>
									<tr>
										<td>Popularity</td>
										<td></td>
									</tr>
								</table>
							</div>
							<div id="yoga" class="tab">
								<table>
									<tr>
										<td>Completed</td>
										<td></td>
									</tr>
									<tr>
										<td>Attempted</td>
										<td></td>
									</tr>
									<tr>
										<td>Percent Completion</td>
										<td></td>
									</tr>
									<tr>
										<td>Popularity</td>
										<td></td>
									</tr>
								</table>
							</div>
							<div id="stre" class="tab">
								<table>
									<tr>
										<td>Completed</td>
										<td></td>
									</tr>
									<tr>
										<td>Attempted</td>
										<td></td>
									</tr>
									<tr>
										<td>Percent Completion</td>
										<td></td>
									</tr>
									<tr>
										<td>Popularity</td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		
		
		<div style="display:none;" id="blackBackground" onclick="closeViewer()"></div>
	</div>
	<script type="text/javascript">
		buildPage("");
	</script>
</body>
</html>