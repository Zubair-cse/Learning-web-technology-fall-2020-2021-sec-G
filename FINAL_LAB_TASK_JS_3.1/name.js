function validation(){
	let user = document.getElementById('name').value

	if(user ==""){
		document.getElementById('username').innerHTML="Please write your name";
		return false;
	}
	if(user.length <=2) {
		document.getElementById('username').innerHTML="Please write minimun 3 digit";
		return false;
	}
	if(!isNaN(user)){
		document.getElementById('username').innerHTML="Please don't write a number";
		return false;
	}
	
	if(user =='.' || user == '-'){
		document.getElementById('username').innerHTML="Please  write a-z or A-Z or dot(.) or dash(-)	";
	
		return false;

	}
}