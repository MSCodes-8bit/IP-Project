function toggleLogin() { 
	var loginout = document.getElementById("nav_user");
	loginout.innerHTML = "";
	loginout.innerHTML += '<a href="log.php">login</a>'; 
}
toggleLogin();