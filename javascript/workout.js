window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	console.log(datalist);
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		success: function(data){
			for(var i = 0; i < data.length; i++){
				console.log(data[i]);
			}
			document.createElement('option');

			console.log(data);
		}
	})
}