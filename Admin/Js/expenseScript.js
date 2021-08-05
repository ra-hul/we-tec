function expenseCheckValidation()
{
	var name = document.getElementById('name').value;
	var buy = document.getElementById('buyingPrice').value;
	var sell = document.getElementById('sellingPrice').value;

	if(name==""){
		document.getElementById('n').innerHTML = "Please fill the name field!!!";
		return false;
	}

	if(name.length>0){
		document.getElementById('n').innerHTML="";
	}

	if(buy==""){
		document.getElementById('e').innerHTML = "Please fill the quantity field!!!";
		return false;
	}

	if(isNaN(buy)){
		document.getElementById('e').innerHTML = "Only Numbers";
		return false;
	}

	if(buy.length>0){
		document.getElementById('e').innerHTML="";
	}

	if(sell==""){
		document.getElementById('s').innerHTML = "Please fill the payment field!!!";
		return false;
	}

	if(isNaN(sell)){
		document.getElementById('s').innerHTML = "Only Numbers";
		return false;
	}

	if(sell.length>0){
		document.getElementById('s').innerHTML="";
	}
}
