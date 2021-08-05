function NameValidation()
{
	let name= document.getElementById('myname').value;

    //Name validation

	if(name == ''){
		document.getElementById('head').innerHTML = 'Empty  field ';		
	}
	

	else if (name.length<2){
		document.getElementById('head').innerHTML = 'field is invalid';
	}
	
	else if(name >='a' && name <='z' || name>='A' && name <='Z' || name == '.' || name == '-'){
		document.getElementById('head').innerHTML = name;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Field is invalid';
	}

    


    //amount 


	/*else if (category >=0 && category <=9){
		document.getElementById('head').innerHTML = 'method is invalid';
	}*/
	
	


	

}

function CategoryValidate(){
    let category= document.getElementById('category').value;
    //Category Validation

    if(category == ''){
		document.getElementById('head').innerHTML = 'Empty Category field ';		
	}
	

	else if (category.length<2){
		document.getElementById('head').innerHTML = 'Category is invalid';
	}
	
	else if(category >='a' && category <='z' || category>='A' && category <='Z' || category == '.' || category == '-'){
		document.getElementById('head').innerHTML = category;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Category is invalid';
	}


}




//Alert the user 

function validateform(){  
	const name = document.getElementById('myname').value;
	const category = document.getElementById('category').value;
	
		 
   if (name == null || name == "") {
	  alert("category can't be blank");  
	  return false; 
   }
   
   else if (category == null || category == "") {
	   alert("Name can't be blank");  
	  return false;
   } 
  

  

   
   else {
	   alert("Are Sure to request for product??");
		return true;
   }

  }
