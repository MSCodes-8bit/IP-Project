function toggleLogout() { 
	var loginout = document.getElementById("nav_user");
	loginout.innerHTML = "";
	loginout.innerHTML += '<a href="logout.php">logout</a>';
}
toggleLogout();