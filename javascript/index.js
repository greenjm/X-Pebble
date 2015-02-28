var MENU;

window.onload = function() {
	clearCookies();
	if(Cookie.exists("username")){
		console.log("success");
	} else {
		notLoggedInNav();
	}
}

var notLoggedInNav = function() {
	MENU = document.getElementById('menu').innerHTML;
	document.getElementById('menu').innerHTML = "";
}



//FOR DEV testing, not for prod USED ROF LOG OUT
var clearCookies = function(){
	var date = new Date();
	console.log("here");
	Cookie.remove("username");
}

/**
 * This is the data passed to the server when login happens
 */
var getLoginCredentials = function() {
	var username = $("input[name=username]").val();
	var password = $("input[name=password]").val();
	console.log(username, password);
	return {username: username, password: password};
}

/**
 * Attempts to login, via database queries with the login credentials
 */
var login = function(){
	var credentials = getLoginCredentials();

	var packet = {
		"username": credentials["username"],
		"password": credentials["password"]
	};


	$.ajax({
		type: "POST",
		url: "../scripts/login.php",
		datatype: "html",
		data: packet,
		async: false,
		success: function(data) {
			Cookie.set("username", packet.username);
			Cookie.set("login-success", true);
			document.getElementById('menu').innerHTML= MENU;
			window.location.href = "../views/profile.php"
		},
		error: function() {
			$("#loginError").show();
		},
		complete: function() {
			
		}
	});
}