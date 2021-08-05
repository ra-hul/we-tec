function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty feedback field ';		
	}
	else if(data.length <2){
		document.getElementById('head').innerHTML = 'Feedback required at least two letters';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'Feedback is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Feedback is invalid';
	}
	

}

function validateform(){  
	const name = document.getElementById('name').value;
	
		 
   if (name == null || name == "") {
	  alert("You can not submit blank review here!!!");  
	  return false; 
   }
   
   
  

  

   
   else {
	   alert("Do you want to submit the review?");
		return true;
   }

  }

