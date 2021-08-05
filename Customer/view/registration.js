

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

function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('eemail').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <5 ){
		document.getElementById('eemail').innerHTML = 'Email is invalid !';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('eemail').innerHTML = 'Email seems valid ';
		     }
	else if( data.includes("@yahoo.com")){
		document.getElementById('eemail').innerHTML = 'Email seems Valid';
		     }	
	else if( data.includes("@.edu")){
		document.getElementById('eemail').innerHTML = 'Email seems Valid';
		     }	          
      else{
		document.getElementById('eemail').innerHTML = 'Email is invalid !';
	}

}

function UserNameValidation()
{
    let data= document.getElementById('username').value;

	if(data == ''){
		document.getElementById('uname').innerHTML = ' Please Write Down the Name!!!';		
	}
	else if(data.length <3){
		document.getElementById('uname').innerHTML = 'Name required at least three letters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('uname').innerHTML = ' Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('uname').innerHTML = 'Name seems Valid';
     }
    
    else{
		document.getElementById('uname').innerHTML = 'Name is invalid';
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

function ConfirmValidation(){

    let data= document.getElementById('CPass').value;

	if(data == ''){
		document.getElementById('cpass').innerHTML = ' Please Write Down the Password!!!';		
	}
	else if(data.length <8){
		document.getElementById('cpass').innerHTML = 'Password required at least 8 characters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('cpass').innerHTML = ' Password is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '#' || data == '*'){
		document.getElementById('cpass').innerHTML = 'Password seems Strong';
     }
    
    else{
		document.getElementById('cpass').innerHTML = 'Password valid!!!!!';
	}


}

function GenderValidation(){
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let other = document.getElementById('others');
   
        if(male.checked ==true ){
           document.getElementById('Male').innerHTML = male.value;		
       }
       else if(female.checked ==true){
           document.getElementById('Female').innerHTML = female.value;		
       }
       
        else{
           document.getElementById('Others').innerHTML = other.value;
       }
   
}

function DOBValidation(){
    let date= document.getElementById('date').value;
    let month= document.getElementById('month').value;
    let year= document.getElementById('year').value;

    if(date == ''){
		document.getElementById('Date').innerHTML = ' Please Write Down the Date!!!';	
       	


    }	

    if(month=''){
        document.getElementById('Month').innerHTML = ' Please Write Down the Month!!!';	


    }

    if(year=''){
        document.getElementById('Year').innerHTML = ' Please Write Down the Year!!!';	


    }


	




}

function validateform(){  
	const name = document.getElementById('name').value;
	const email = document.getElementById('email').value;
	const username = document.getElementById('username').value;
	const pass = document.getElementById('Pass').value;
    const cpass = document.getElementById('CPass').value;
		 
   if (name == null || name == "") {
	  alert("Name can't be blank");  
	  return false; 
   }
   
   else if (email == null || email == "") {
	   alert("Email can't be blank");  
	  return false;
   } 
  else if (username == null || username == "") {
	  alert("User can't be blank");  
	  return false;
   }
  
 else if (pass == null ||pass == "") {
	  alert("UserName can't be blank");  
	  return false;
  }

  else if (cpass == null || cpass == "") {
	 alert("Password can't be blank");  
	 return false;
   }

   
   else {
	   alert("Are Sure that your data is accurate?");
		return true;
   }

  }