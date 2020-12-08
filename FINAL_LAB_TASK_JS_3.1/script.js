function getName(){
	let name = document.getElementById('name').value;
	alert(name);
	document.getElementById('head').innerHTML = name;
}