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
				//option.setAttribute('name', value);
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
			console.log(data);
		}
	});
}

var addRow = function() {
	var table = document.getElementById('table');
	var row = table.insertRow(table.rows.length-1);
	row.innerHTML = '<td><input class="searchbox" type="text" id="test" list="exercisenames"></td>';
	$("#test").keyup(function(event) {
		if (event.keyCode == 13){
		getDuration(this);
	}
	});
}

