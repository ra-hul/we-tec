
function editCheckValidation()
{
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var username = document.getElementById('username').value;


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

}

