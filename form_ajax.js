function checkForm(){
 
	//mengambil nilai form
	var subject = document.getElementById("subject1").value;
	var pesan = document.getElementById("pesan1").value;

	if(subject == '' && pesan == '' ){
		alert("Harap Subject dan pesan diisi");
		document.location.href="http://localhost/notificationemail/index.php"
	else if	(subject == '' && pesan != '' ){
	}
		alert("Harap Subject diisi");
		document.location.href="http://localhost/notificationemail/index.php"
	}
	else if (subject != '' && pesan == '' ){
		alert("Harap Pesan diisi");
		document.location.href="http://localhost/notificationemail/index.php"
	}	
	else {
		var subject1 = document.getElementById("subject");
		var pesan1 = document.getElementById("pesan");

		//Check value form
		if(subject1.innerHTML == 'tidak boleh kosong' || pesan1.innerHTML == 'tidak boleh kosong'){
			alert('Informasi harus valid!!');
		} else {
			document.getElementById("notification").submit();
		}
	}
}
 
function validate(field, query){
	var xmlhttp;
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
 
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState != 4 && xmlhttp.status == 200){
			document.getElementById(field).innerHTML = "Cek Validasi..";
		} else if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
		}
	}
	xmlhttp.open("GET","validation.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}