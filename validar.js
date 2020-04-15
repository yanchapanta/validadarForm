function validate(){
	var name, last-name, mail, user, password, telephone, expresion;
	name = document.getElementById("name").value;
	last-name = document.getElementById("last-name").value;
	mail = document.getElementById("mail").value;
	user = document.getElementById("user").value;
	password = document.getElementById("password").value;
	telephone = document.getElementById("telephone").value;
	//texto123@gmai.com
	//\w.- Indicates that you can enter any number from the p-a-z
	// \. it's a special character
	// [a-z] indicates that there should only be a single character from a-z
	expresion = /\w+@\w+\.+[a-z]/;

	if(name === "" || last-name === "" || mail === "" || user === ""  || password === "" || telephone === ""){
		alert("All fields are mandatory");
		return false;
	}else if(name.length > 30){
		alert("The name is very long");
		return false;
	}else if(last-name.length > 80){
		alert("The last name is very long");
		return false;
	}else if(mail.length > 100){
		alert("The mail is very long");
		return false;
	}else if(!expresion.test(mail)){
		alert("The mail is not valid");
		return false;
	}else if(user.length > 20 || password.length > 20){
		alert("The password and the user must only have 20 characters");
		return false;
	}else if(telephone.length > 10){
		alert("The telephone is very long");
		return false;
	}else if(isNaN(telephone)){
		alert("The telephone number entered is not a number");
		return false;
	}
}