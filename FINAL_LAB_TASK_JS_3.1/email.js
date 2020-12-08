function validation(){
	let user = document.getElementById('email').value

	if(user ==""){
		document.getElementById('useremail').innerHTML="Please write your mail";
		return false;
    }
    if(user.indexOf('@')<=0){
        document.getElementById('useremail').innerHTML="@ invalid";
		return false;

    }
    if((user.charAt(user.length-4)!='.') && (user.charAt(user.length-3)!='.')){

      document.getElementById('useremail').innerHTML=" . invalid";
		return false;
    }
}