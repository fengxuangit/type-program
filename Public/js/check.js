function checklogin() {
	var username = document.getElementById('u');
	var password = document.getElementById('p');
	if(username.value == "" || password.value == "") {
		alert("用户名或密码不能为空");
		document.u.name.focus(); 
		return false;
	}
}

