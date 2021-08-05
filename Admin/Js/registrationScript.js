
function regCheckValidation()
{
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var confirm_password = document.getElementById('confirm_password').value;


	if(name==""){
		document.getElementById('n').innerHTML = "Please fill the name field";
		return false;
	}

	if(name.length<4 || name.length>20){
		document.getElementById('n').innerHTML = "Name must be between 4 to 20 characters";
		return false;
	}

	if(!isNaN(name)){
		document.getElementById('n').innerHTML = "Use letters first";
		return false;
	}

	if(!(name[0]>='A'&&name[0]<='Z') ){
		document.getElementById('n').innerHTML = "First letter must be capital";
		return false;
	}
	if(name.length>0){
		document.getElementById('n').innerHTML="";
	}


	if(email==""){
		document.getElementById('e').innerHTML = "Please fill the email field";
		return false;
	}
	if(email.length>0){
		document.getElementById('e').innerHTML="";
	}


	if(username==""){
		document.getElementById('un').innerHTML = "Please fill the username field";
		return false;

	}
	if(username.length<2 || username.length>15){
		document.getElementById('un').innerHTML = "Username must be btween 2 to 15";
		return false;
	}
	if(username.length>0){
		document.getElementById('un').innerHTML="";
	}

	if(password==""){
		document.getElementById('p').innerHTML = "Please fill the password field ";
		return false;
	}

	if(password.length<=7 || password.length>20){
		document.getElementById('p').innerHTML = "Password must be btween 8 to 20";
		return false;
	}
	if(password.length>0){
		document.getElementById('p').innerHTML="";
	}

	if(confirm_password==""){
		document.getElementById('cp').innerHTML = "Please fill the confirm_password field";
		return false;
	}
	if(confirm_password.length>0){
		document.getElementById('cp').innerHTML="";
	}

	if(password != confirm_password){
		document.getElementById('cp').innerHTML = "Confirm_password are not matching";
		return false;
	}

}