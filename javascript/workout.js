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
	row.innerHTML = '<td><input class="searchbox" type="text" class="test" list="exercisenames"></td><td></td>';
	$("input").keyup(function(event) {
		if (event.keyCode == 13){
		getDuration(this);
	}
	});
}

var saveWorkout = function() {
	var username = "greenjm";
	var userid;
	var packet = {
		"username": username
	};
	$.ajax({
		type: "GET",
		url: "../scripts/get_id_from_username.php",
		data: packet,
		dataType: "text",
		success: function(data) {
			userid = data;
		}
	});
	console.log(userid);
}

