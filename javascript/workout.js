window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	console.log(datalist);
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		datatype: "json";
		success: function(data){
			for(var id in data){
				console.log(data['1']['name']);
			}	
			document.createElement('option');

			console.log(data);
		}
	})
}