<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Your Profile</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/profile.css">
	<script type="text/javascript" src="../libraries/canvasjs/canvasjs.min.js"></script>
	<script src="http://www.webstepbook.com/Cookie.js" type="text/javascript"></script>
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/main.js"></script>
	<script src="../javascript/profile.js"></script>
	<script src="../javascript/profiletabs.js"></script>
	
	<link href="../images/FaviconFinal.png" type="image/png" rel="icon"/>
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
						<ul id="workList">
						</ul>
					</div>
				</div>
				<div class="stats-wrapper">
					<div id="myStatsHeader">
					<div id="stat-title">
						<h1>My Statistics</h1>
					</div>
						
					</div>
					<div id="statForm">
						<div class="tabs">
							<ul class="tab-links">
								<li class="active"><a href="#aero" onclick="get_stats(1)">Aerobic</a></li>
								<li><a href="#anaer" onclick="get_stats(3)">Anaerobic</a></li>
								<li><a href="#yoga" onclick="get_stats(2)">Yoga</a></li>
								<li><a href="#stre" onclick="get_stats(4)">Stretching</a></li>
							</ul>
						<div class="tab-content">
							<div id="aero" class="tab active" title="1">
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
							<div id="anaer" class="tab" title="3">
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
							<div id="yoga" class="tab" title="2">
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
							<div id="stre" class="tab" title="4">
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
	<!--<script type="text/javascript">
		buildPage("");
	</script>-->
</body>
</html>