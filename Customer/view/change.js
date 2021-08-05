function CurrentValidation(){
    let data= document.getElementById('cPass').value;

	if(data == ''){
		document.getElementById('CPass').innerHTML = ' Please Write Down the  current Password!!!';		
	}
	else if(data.length <8){
		document.getElementById('CPass').innerHTML = 'Password required at least 8 characters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('CPass').innerHTML = 'Current Password is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '#' || data == '*'){
		document.getElementById('CPass').innerHTML = 'Current Password seems Strong';
     }
    
    else{
		document.getElementById('CPass').innerHTML = 'Current Password valid!!!!!';
	}



}

function NewValidation(){

    let data= document.getElementById('nPass').value;

	if(data == ''){
		document.getElementById('NPass').innerHTML = ' Please Write Down the Password!!!';		
	}
	else if(data.length <8){
		document.getElementById('NPass').innerHTML = 'Password required at least 8 characters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('NPass').innerHTML = ' Password is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '#' || data == '*'){
		document.getElementById('NPass').innerHTML = 'Password seems Strong';
     }
    
    else{
		document.getElementById('NPass').innerHTML = 'Password valid!!!!!';
	}


}

function RenewValidation(){

    
    let data= document.getElementById('rPass').value;
    let pass= document.getElementById('nPass').value;


	if(data == ''){
		document.getElementById('RPass').innerHTML = ' Please Write Down the Password!!!';		
	}
    else if(data !== pass){
        document.getElementById('RPass').innerHTML = ' NewPassword and Renew Password isn not same';		

    }
	else if(data.length <8){
		document.getElementById('RPass').innerHTML = 'Password required at least 8 characters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('RPass').innerHTML = ' Password is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '#' || data == '*'){
		document.getElementById('RPass').innerHTML = 'Password seems Strong';
     }
    
    else{
		document.getElementById('RPass').innerHTML = 'Password valid!!!!!';
	}


}

function validateform(){  
	const cPass = document.getElementById('cPass').value;
	const nPass = document.getElementById('nPass').value;
	const rPass = document.getElementById('rPass').value;
	
		 
   if (cPass == null || cPass == "") {
	  alert("Current password  can't be blank");  
	  return false; 
   }
   
   else if (nPass == null || nPass == "") {
	   alert("New Password can't be blank");  
	  return false;
   } 
  else if (rPass == null || rPass == "") {
	  alert("Renew Password can't be blank");  
	  return false;
   }
  


   
   else {
	   alert("Are you confirm to change your Password???");
		return true;
   }

  }