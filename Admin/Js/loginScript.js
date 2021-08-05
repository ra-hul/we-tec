	
	function loginCheckValidation(){

		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		if(username==""){
			document.getElementById('user').innerHTML = "Please fill the username field";
			return false;
		}
		if(username.length>0){
			document.getElementById('user').innerHTML = "";
		}

		if(password==""){
			document.getElementById('pass').innerHTML = "*Please fill the password field";
			return false;
		}
		if(password.length>0){
			document.getElementById('pass').innerHTML = "";
		}
	}