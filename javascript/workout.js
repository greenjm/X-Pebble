window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	console.log(datalist);
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		success: function(data){
			for(var name in data){
				console.log(data[name]);
			}
			document.createElement('option');

			//console.log(data);
		}
	})
}