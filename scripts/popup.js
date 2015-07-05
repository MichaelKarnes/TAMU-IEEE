// Validating Empty Field
function check_empty() {
	if (document.getElementById('username').value === "" || document.getElementById('password').value === "") {
		alert("Please give a username and password.");
		return false;
	}
	return true;
}
//Function To Display Popup
function popup_show() {
	document.getElementById('popup').style.display = "block";
}
//Function to Hide Popup
function popup_hide(){
	document.getElementById('popup').style.display = "none";
}