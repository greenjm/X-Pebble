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
	})
}

var addRow = function() {
	var table = document.getElementById('table');
	var row = table.insertRow(table.rows.length-1);
	row.innerHTML = '<td><input class="searchbox" type="text" id="test" list="exercisenames" onchange="getDuration(this)"></td>';
}

var getDuration = function(e){
	console.log(e.valueOf());
}