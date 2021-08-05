function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('nname').innerHTML = ' Please Write Down the Name!!!';		
	}
	else if(data.length <3){
		document.getElementById('nname').innerHTML = 'Name required at least three letters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('nname').innerHTML = ' Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('nname').innerHTML = 'Name seems Valid';
     }
    
    else{
		document.getElementById('nname').innerHTML = 'Name is invalid';
	}
	

}

function PasswordValidation(){
    let data= document.getElementById('Pass').value;

	if(data == ''){
		document.getElementById('pass').innerHTML = ' Please Write Down the Password!!!';		
	}
	else if(data.length <8){
		document.getElementById('pass').innerHTML = 'Password required at least 8 characters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('pass').innerHTML = ' Password is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '#' || data == '*'){
		document.getElementById('pass').innerHTML = 'Password seems Strong';
     }
    
    else{
		document.getElementById('pass').innerHTML = 'Password valid!!!!!';
	}



}