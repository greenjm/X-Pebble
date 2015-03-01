var USERID;
var USERNAME;

window.onload = function(){
	USERNAME = Cookie.get("username");
	var packet = {
		"username": USERNAME
	}
	$.ajax ({
		type: "GET",
		url: "../scripts/get_id_from_username.php",
		data: packet,
		dataType: "text",
		success: function(data){
			USERID = data;
			console.log(USERID);
		}
	});
	get_stats(1);
}

var get_stats = function(category){
	var packet = {
		"category": category,
		"userid": USERID
	};
	console.log(USERID);
	$.ajax ({
		type: "GET",
		url: "../scripts/get_stats_for_category.php",
		data: packet,
		dataType: "json",
		success: function(data){
			console.log(data);
		}
	})
}
	