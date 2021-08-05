
function ownerCheckValidation()
{

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var repass = document.getElementById('repass').value;
	var email = document.getElementById('email').value;

	if(username==""){
		document.getElementById('un').innerHTML = "Please fill the username field!!";
		return false;

	}

	if(username.length>0){
		document.getElementById('un').innerHTML="";
	}

	if(password==""){
		document.getElementById('p').innerHTML = "Please fill the password field!!!";
		return false;
	}

	if(password.length>0){
		document.getElementById('p').innerHTML="";
	}

	if(repass==""){
		document.getElementById('cp').innerHTML = "Please fill the repass field!!!";
		return false;
	}
	if(confpass.length>0){
		document.getElementById('cp').innerHTML="";
	}

	if(password != repass){
		document.getElementById('cp').innerHTML = "Confirm password are not matching!!!";
		return false;
	}

	if(email==""){
		document.getElementById('e').innerHTML = "Please fill the email field!!!";
		return false;
	}

	if(email.length>0){
		document.getElementById('e').innerHTML="";
	}



}



