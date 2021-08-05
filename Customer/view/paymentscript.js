
function NameValidation()
{
	let name= document.getElementById('myname').value;

    //Name validation

	if(name == ''){
		document.getElementById('head').innerHTML = 'Empty name field ';		
	}
	

	else if (name.length<2){
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	
	else if(name >='a' && name <='z' || name>='A' && name <='Z' || name == '.' || name == '-'){
		document.getElementById('head').innerHTML = name;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Name is invalid';
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

function MethodValidate(){
    let method= document.getElementById('method').value;
    
    //Method 

    if(method == ''){
		document.getElementById('head').innerHTML = 'Empty Method field ';		
	}
	

	else if (method.length<2){
		document.getElementById('head').innerHTML = 'Method is invalid';
	}
	
	else if(method >='a' && method <='z' || method>='A' && method <='Z' || method >=0 && method <=10000000000000 || method == '-'){
		document.getElementById('head').innerHTML = method;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Method is invalid';
	}


}

function AmountValidate(){
    let amount= document.getElementById('amount').value;
	
    if(amount == ''){
		document.getElementById('head').innerHTML = 'Empty amount field ';		
	}
	

	else if (amount.length<2){
		document.getElementById('head').innerHTML = 'Amount is invalid';
	}
	
	else if(amount>='a' && amount <='z' || amount>='A' && amount <='Z' || amount>=0 && amount <=10000000000000 || amount == '-'){
		document.getElementById('head').innerHTML = amount;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Amount is invalid';
	}

    
    
	


}


//Alert the user 

function validateform(){  
	const name = document.getElementById('myname').value;
	const category = document.getElementById('category').value;
	const method = document.getElementById('method').value;
	const amount = document.getElementById('amount').value;
		 
   if (name == null || name == "") {
	  alert("category can't be blank");  
	  return false; 
   }
   
   else if (category == null || category == "") {
	   alert("Name can't be blank");  
	  return false;
   } 
  else if (method == null || method == "") {
	  alert("Method can't be blank");  
	  return false;
   }
  
 else if (amount == null ||amount == "") {
	  alert("amount can't be blank");  
	  return false;
  }

  

   
   else {
	   alert("Are Sure to transaction?");
		return true;
   }

  }
