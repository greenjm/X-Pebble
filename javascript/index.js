var MENU;

window.onload = function() {
	clearCookies();
	if(Cookie.exists("username")){
		console.log("success");
	} else {
		notLoggedInNav();
	}



	var packet = {
		"userid": '1'
	}
	$.ajax ({
		url: '../scripts/get_user_workouts.php',
		data: packet,
		dataType: 'json',
		success: function(data){
			console.log(data);
		}
	})

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
			window.location.href = "../views/profile.php";
		},
		error: function() {
			$("#loginError").show();
		},
		complete: function() {
			
		}
	});
}

var openregister = function() {
	$("#log-wrapper").hide();
	$("#regWrapper").show();
}

var getRegisterFields = function() {
	var username = $("input[name=user]").val();
	var password = $("input[name=pass]").val();
	var confirm = $("input[name=confirm]").val();
	var email = $("input[name=email]").val();
	var firstName = $("input[name=first-name]").val();
	var lastName = $("input[name=last-name]").val();
	var pebbleid = $("input[name=pebbleid]").val();
	return {username: username, password: password, confirm: confirm, email: email, firstName: firstName, lastName: lastName, pebbleid: pebbleid};
}

var register = function() {
	$("#usernameTaken").hide();
	$("#passwordError").hide();
	var fields = getRegisterFields();
	var packet = {
		"username": fields["username"],
		"password": fields["password"],
		"confirm": fields["confirm"],
		"email": fields["email"],
		"firstname": fields["firstName"],
		"lastname": fields["lastName"],
		"pebbleid": fields["pebbleid"]
	};
	if(packet["confirm"] != packet["password"]){
		$("#passwordError").show();
		return;
	}
	$.ajax ({
		type: "POST",
		url: "../scripts/check_if_user_exists.php",
		dataType: "text",
		data: packet,
		success: function(data){
			console.log(data);
			/*if(data === "taken"){
				$("#usernameTaken").show();
			}*/
		}
	});
	if($("#usernameTaken").is(":visible")){
		return;
	}
	$.ajax ({
		type: "POST",
		url: "../scripts/add_user.php",
		data: packet,
		success: function(){
			$("#regWrapper").hide();
			Cookie.set("username", packet.username);
			Cookie.set("login-success", true);
			document.getElementById('menu').innerHTML= MENU;
			window.location.href = "../views/profile.php";
		}
	})

}

var cancel = function() {
	$("input[name=user]").val("");
	$("input[name=pass]").val("");
	$("input[name=confirm]").val("");
	$("input[name=email]").val("");
	$("input[name=first-name]").val("");
	$("input[name=last-name]").val("");
	$("input[name=pebbleid]").val("");
	$("#regWrapper").hide();
	$("#log-wrapper").show();
}