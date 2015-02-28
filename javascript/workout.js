window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	console.log(datalist);
	$.ajax({
		url: "x-pebble.azurewebsites.net/scripts/get_all_exercises_by_name.php",
		success: function(data){
			console.log(data);
		}
	})
}