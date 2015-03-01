var onStart = function() {
	if (!Cookie.exists("username")) {
		notLoggedInNav();
		redirect("index.php");
	}
}

var notLoggedInNav = function() {
	MENU = document.getElementById('menu').innerHTML;
	document.getElementById('menu').innerHTML = "<li id='sign-in-register'><button type='submit' onclick='openlogin()'>Sign in/Register</button></li>";
}

var redirect = function(location) {
	window.location.href = location;
	$("body").innerText = 'If you are not redirected automatically, follow the <a href="' + location + '">link</a>';
}

var clearCookies = function() {
	var date = new Date();
	Cookie.remove("username");
	notLoggedInNav();
}