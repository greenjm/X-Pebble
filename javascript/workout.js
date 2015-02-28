window.onload = function() {
	populateDatalist();
}

var populateDatalist = function(){
	var datalist = $("#exercisenames");
	$.ajax({
		url: "../scripts/get_all_exercises_by_name.php",
		dataType: 'json',
		success: function(data){
			//var test = jQuery.parseJSON(data);
			for(var id in data){
				var option = document.createElement('option');
				option.setAttribute('value', data[id]['name']);
				console.log(data[id]['name']);
				datalist.append(option);
			}
		}
	})
}