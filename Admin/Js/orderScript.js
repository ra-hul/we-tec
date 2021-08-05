
function orderCheckValidation()
{
	var name = document.getElementById('name').value;
	var quantity = document.getElementById('quantity').value;
	var email = document.getElementById('email').value;
	var payment = document.getElementById('payment').value;

	if(name==""){
		document.getElementById('n').innerHTML = "Please fill the name field!!!";
		return false;
	}

	if(name.length>0){
		document.getElementById('n').innerHTML="";
	}

	if(quantity==""){
		document.getElementById('q').innerHTML = "Please fill the quantity field!!!";
		return false;
	}

	if(isNaN(quantity)){
		document.getElementById('q').innerHTML = "Only Numbers";
		return false;
	}

	if(quantity.length>0){
		document.getElementById('q').innerHTML="";
	}

	if(email==""){
		document.getElementById('e').innerHTML = "Please fill the email field!!!";
		return false;
	}
	if(email.length>0){
		document.getElementById('e').innerHTML="";
	}

	if(payment==""){
		document.getElementById('p').innerHTML = "Please fill the payment field!!!";
		return false;
	}

	if(isNaN(payment)){
		document.getElementById('p').innerHTML = "Only Numbers";
		return false;
	}

	if(payment.length>0){
		document.getElementById('p').innerHTML="";
	}
}



