window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	console.log(datalist);
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		success: function(data){
			for(var id in data){
				console.log(id);
			}
			document.createElement('option');

			//console.log(data);
		}
	})
}