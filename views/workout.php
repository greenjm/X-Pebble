<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Workout</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/workout.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>

	<link href="../images/fav.gif" type="image/gif" rel="shortcut icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<form action="#">
	<div id="header">
	<button id="save" type="submit" value="Save Workout" onclick="saveWorkout()">Save Workout</button><br>
	<input id="workoutname" type="text" name="workout-name" value="MyWorkout">
	<!--<button id="save" type="submit" value="Save Workout" onclick="saveWorkout()">Save Workout</button><br>-->
</div>
	<div id="table-wrapper">
	<table id="table">
		<tr>
			<th>Name</th>
			<th>Duration</th>
		</tr>
		<tr>
			<td><button id="new-exercise" type="button" onclick="addLine()">New Exercise</button></td>
			<td><input type="text" id="test" list="exercisenames"></td>
		</tr>
	</table>
</div>
</form>
<datalist id="exercisenames"></datalist>
	<div class="wrapper">
		
		
		<div style="display:none;" id="blackBackground" onclick="closeViewer()"></div>
	</div>
</body>
</html>