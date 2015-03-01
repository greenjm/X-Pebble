var USERID;
var USERNAME;

window.onload = function(){
	USERNAME = Cookie.get("username");
	var firstName = $("#firstName");
	var lastName = $("#lastName");
	var usernme = $("#username");
	var packet = {
		"username": USERNAME
	}
	$.ajax ({
		type: "GET",
		url: "../scripts/get_name_from_username.php",
		data: packet,
		dataType: "json",
		async: false,
		success: function(data){
			nameresults = data;
			usernme.html(data[0]);
			firstName.html(data[1]);
			lastName.html(data[2]);
		}
	});
	$.ajax ({
		type: "GET",
		url: "../scripts/get_id_from_username.php",
		data: packet,
		dataType: "text",
		async: false,
		success: function(data){
			USERID = data;
			console.log(USERID);
		}
	});
	get_stats(1);
}

var get_name("username"){
	
}

var get_stats = function(category){
	var id;
	if (category == 1){
		id = "aero";
	}else if (category == 2){
		id = "yoga";
	}else if (category == 3){
		id = "anaer";
	} else {
		id = "stre";
	}
	console.log(id);
	var completed = $("#" + id + " table tr:first-of-type td:nth-of-type(2)");
	var attempted = $("#" + id + " table tr:nth-of-type(2) td:nth-of-type(2)");
	var percentCompletion = $("#" + id + " table tr:nth-of-type(3) td:nth-of-type(2)");
	var popularity = $("#" + id + " table tr:nth-of-type(4) td:nth-of-type(2)");
	/*var completed = document.getElementById('' + id);
	completed = completed.firstChild;*/
	console.log(completed);
	var packet = {
		"category": category,
		"userid": USERID
	};
	var results;
	console.log(USERID);
	$.ajax ({
		type: "GET",
		url: "../scripts/get_stats_for_category.php",
		data: packet,
		dataType: "json",
		success: function(data){
			results = data;
			completed.html(data[1]);
			attempted.html(data[0]);
			percentCompletion.html(Math.floor(data[1] / data[0] * 100) + "%");
			popularity.html(Math.floor(data[0] / data[2] * 100) + "%");
		}
	});
}
	