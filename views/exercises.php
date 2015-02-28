<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/exercises.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/exercisetabs.js"></script>

	<link href="../images/X-Pebble Favicon.png" type="image/png" rel="icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
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
							<td>Push-Ups</td>
							<td>Lay on ground prone with hands under shoulders. Keep a straight back and hold the head up. Push body up all the way without locking the elbows. 
							Then lower body down until elbows are at a 90 degree angle. Repeat. Keep a steady pace on both the descent and ascent. Duration: 60 seconds</td>
							<td><img alt="pushups" src="../images/pushups.gif"></img></td>
						</tr>
						<tr>
							<td>Plank</td>
							<td>Get into pushup position on the floor. Now bend your elbows 90 degrees and rest your weight on your forearms. 
							Your elbows should be directly beneath your shoulders, and your body should form a straight line from your head to your feet. Duration: 120 seconds</td>
							<td><img alt="plank" src="../images/plank.gif"></img></td>
						</tr>
						<tr>
							<td>Crunches</td>
							<td>Lay on your back with your hands behind your head and your legs bent. Lift your torso and legs at the same time so that your knees and elbows touch. 
							You should be on your lower back above your tail bone during this exercise. Lower your torso and legs to lightly touch the ground. Duration: 60 seconds</td>
							<td><img alt="Crunch" src="../images/crunches.gif"></img></td>
						</tr>
						<tr>
							<td>Squats</td>
							<td>Stand with your feet approximately shoulder width apart. Put your hands on your head or together in front of your chest. 
							Squat down while keeping your back straight and your knees above your feet. Duration: 60 seconds</td>
							<td><img alt="squat" src="../images/squat.gif"></img></td>
						</tr>
					</table>
				</div>
 
				<div id="anaer" class="tab">
					<table>
						<tr>
							<td>Bench Press</td>
							<td>Place appropriate weights on barbell in the correct manner. Have your hands just outside shoulder width and lift bar. 
							Lower bar towards the middle of your chest then push it upward. Repeat. It may be necessary to have a friend to spot you. Duration: </td>
							<td><img alt="Bench press" src="../images/benchpress.gif"></img></td>
						</tr>
						<tr>
							<td>Lat. Pull Downs</td>
							<td>Sit down in pull down machine to appropriately adjust leg holders. Adjust weight. Grab bar about 1.5 times shoulder width and move to 
							sit down with extended arms holding the bar above your head. Keeping your back straight, pull the bar down to your chest. 
							Then slowly let it raise back above your head and repeat. Duration: </td>
							<td><img alt="Lat Pull Down" src="../images/latpulldown.gif"></img></td>
						</tr>
						<tr>
							<td>Tricep Push Downs</td>
							<td>While standing at the appropriate machine, adjust the weight and pull down the bar so that your elbows are at your sides. 
							While keeping your back straight and your elbows at your sides push down the bar and let it rise slowly. Repeat. Duration:</td>
							<td><img alt="Tricep Push Down" src="../images/triceppushdown.gif"></img></td>
						</tr>
						<tr>
							<td>Bicep Curls</td>
							<td>This can be done standing or sitting. Standing: use 2 dumbbells. With your arms at your side, raise your hands and twist your hands 
							outward as your hand reaches your shoulder then return your hand to its original position. Duration: </td>
							<td><img alt="Curls" src="../images/curls.gif"></img></td>
						</tr>
					</table>
				</div>
 
				<div id="yoga" class="tab">
					<table>
						<tr>
							<td>Tree Pose</td>
							<td>Instructions</td>
							<td><img alt="Tree Pose" src="../images/treepose.gif"></img></td>
						</tr>
						<tr>
							<td>Downward Facing Dog</td>
							<td>Instructions</td>
							<td><img alt="Downward Dog" src="../images/downwarddog.gif"></img></td>
						</tr>
						<tr>
							<td>Upward Facing Dog</td>
							<td>Instructions</td>
							<td><img alt="Upward Dog" src="../images/upwarddog.gif"></img></td>
						</tr>
						<tr>
							<td>Warrior Pose</td>
							<td>Instructions</td>
							<td><img alt="Warrior Pose" src="../images/warrior.gif"></img></td>
						</tr>
					</table>
				</div>
 
				<div id="stre" class="tab">
					<table>
						<tr>
							<td>Toe Touch</td>
							<td>Place your feet together or as close as possible. Slowly bend over while keeping your knees straight to touch your lower shins, ankles, or toes. Duration: 30 seconds</td>
							<td><img alt="Toe Touch" src="../images/toetouch.gif"></img></td>
						</tr>
						<tr>
							<td>Side Lunge</td>
							<td>Do for both legs! Step out to the side and lower body into that step while keeping your knee above your foot. 
							Can be done so that you return to standing position and perform another lunge for a dynamic stretch. Duration: 30 seconds</td>
							<td><img alt="Side Lunge" src="../images/sidelunge.gif"></img></td>
						</tr>
						<tr>
							<td>Butterfly</td>
							<td>Sit down with balls of feet touching each other and pull feet towards crotch. Push knees towards ground to get fullest stretch. Duration: 30 seconds</td>
							<td><img alt="Butterfly" src="../images/butterfly.gif"></img></td>
						</tr>
						<tr>
							<td>Arm-bar</td>
							<td>Do for both arms! Cross one arm over chest. Grip that shoulder with other hand from underneath stretched arm. Lift bent elbow to stretch arm. Duration: 30 seconds</td>
							<td><img alt="Arm-bar" src="../images/armbar.gif"></img></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>