<!DOCTYPE html>
<html>
<head>

<!-- The following <script> prevents Enter from submitting forms, useful for other functions -->
	<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>

</head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Workout</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/workout.css">
	<script src="http://www.webstepbook.com/Cookie.js" type="text/javascript"></script>
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/main.js"></script>
	<script src="../javascript/workout.js"></script>

	<link href="../images/FaviconFinal.png" type="image/png" rel="icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<form onsubmit="return false;">
	<div id="header">
	<button id="save" type="submit" value="Save Workout" onclick="saveWorkout()">Save Workout</button><br>
	<input id="workoutname" type="text" name="workout-name" value="MyWorkout"><br>
	<p id="nameTaken" style="display:none;">You already have a workout with that name. Please choose another name.</p>
	<!--<button id="save" type="submit" value="Save Workout" onclick="saveWorkout()">Save Workout</button><br>-->
</div>
	<div id="table-wrapper">
	<table id="table">
		<tr>
			<th>Name</th>
			<th>Duration</th>
			<th></th>
		</tr>
		<tr>
			<td><button id="new-exercise" type="button" onclick="addRow()">New Exercise</button></td>
			<td style="display:none;" id="maxSizeError">You have reached max capacity for this workout</td>
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