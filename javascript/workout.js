var STEP = 0;

window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		dataType: 'json',
		success: function(data){
			for(var id in data){
				var option = document.createElement('option');
				option.setAttribute('value', data[id]['name']);
				datalist.append(option);
			}
		}
	});
}

var getDuration = function(e){
	var packet = {
		"name": e.value
	};
	$.ajax({
		type: "GET",
		url: "../scripts/get_exercise_duration.php",
		dataType: 'text',
		data: packet,
		success: function(data) {
			e.parentNode.nextSibling.innerHTML = data;
		},
		error: function() {
			e.parentNode.nextSibling.innerHTML = "Invalid Exercise";
		}
	});
}

var addRow = function() {
	$("#maxSizeError").hide();
	var table = document.getElementById('table');
	if (table.rows.length > 17){
		$("#maxSizeError").show();
		return;
	}
	var row = table.insertRow(table.rows.length-1);
	row.innerHTML = '<td><input class="searchbox" type="text" class="test" list="exercisenames" autofocus="autofocus"></td><td></td>';
	$("input").keyup(function(event) {
		if (event.keyCode == 13){
		getDuration(this);
	}
	});
}

var saveWorkout = function() {
	$("#nameTaken").hide();
	var username = Cookie.get("username");
	var userid;
	var packet = {
		"username": username
	};
	$.ajax({
		type: "GET",
		url: "../scripts/get_id_from_username.php",
		data: packet,
		dataType: "text",
		async: false,
		success: function(data) {
			userid = data;
		}
	});
	var workid;
	var workoutName = $("#workoutname").val();
	var packet2 = {
		"userid": userid,
		"name": 'MyWorkout'
	};
	$.ajax({
		type: "POST",
		url: "../scripts/add_new_workout.php",
		data: packet2,
		dataType: "text",
		async: false,
		success: function(data) {
			if (data === "Fail"){
				$("#nameTaken").show();
				return;
			}
			workid = data;
			console.log(data);
		}
	});
	console.log(workid);

	var table = document.getElementById('table');
	for (var i = 1; i < table.rows.length - 1; i++){
		var nextExercise = table.rows[i].firstChild.firstChild.value;
		var packet3 = {
			"workid": workid,
			"step": i,
			"exercise": nextExercise
		};
		console.log(workid);
		$.ajax({
			type: "POST",
			data: packet3,
			url: "../scripts/add_to_routine.php",
			dataType: "text",
			success: function(){
				console.log("success");
			}
		});
	}
}

