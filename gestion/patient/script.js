function validation(){
	var valid = true;

	var formLabels = document.getElementsByTagName("label");

	var name = document.valform.name.value;

	if(name == ""){
		formLabels[0].innerHTML = "complet Name: [required]";
		formLabels[0].style.color = "red";
		valid = false;
	}else if (!isNaN(name)) {
		formLabels[0].innerHTML = "complet Name: [Text Only]";
		formLabels[0].style.color = "red";
		valid = false;
	}else{
		formLabels[0].innerHTML = "complet Name:";
		formLabels[0].style.color = "black";
		valid = (valid) ? true : false;
	}
	var CIN = document.valform.CIN.value;

	if(CIN == ""){
		formLabels[1].innerHTML = "CIN: [required]";
		formLabels[1].style.color = "red";
		valid = false;
	}else{
		formLabels[1].innerHTML = "CIN:";
		formLabels[1].style.color = "black";
		valid = (valid) ? true : false;
	}

	

	var password = document.valform.password.value;

	if(password == ""){
		formLabels[2].innerHTML = "Password: [required]";
		formLabels[2].style.color = "red";
		valid = false;
	}else if (password.length < 6) {
		formLabels[2].innerHTML = "Password: [Must be > 6]";
		formLabels[2].style.color = "red";
		valid = false;
	}else{
		formLabels[2].innerHTML = "Password:";
		formLabels[2].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	var age = document.valform.age.value;
	
	if (age < 0 || age > 100 ) {
		formLabels[4].innerHTML = "age: [Must be between 0 and 100]";
		formLabels[4].style.color = "red";
		valid = false;
	}else{
		formLabels[4].innerHTML = "age:";
		formLabels[4].style.color = "black";
		valid = (valid) ? true : false;
	}

	var tel = document.valform.tel.value;
	
	if(tel == ""){
		formLabels[5].innerHTML = "tel: [required]";
		formLabels[5].style.color = "red";
		valid = false;
	}else if (isNaN(tel)) {
		formLabels[5].innerHTML = "phone number: [Number Only or = 10]";
		formLabels[5].style.color = "red";
		valid = false;
	}else{
		formLabels[5].innerHTML = "phone number:";
		formLabels[5].style.color = "black";
		valid = (valid) ? true : false;
	}

	return valid;
}