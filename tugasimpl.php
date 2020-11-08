<!DOCTYPE html>
<html>
<head>
<title>Tugas Implementasi Interface</title>
</head>
<body>
<form name="formTugas" id="tugasku" onsubmit="return validateForm()" action="" method="POST">
<input type="text" name="username" id="username"
placeholder="Username" ><br>
<input type="password" name="password" id="pass" placeholder="Password"><br>
<input type="password" name="repeat" id="repeat" placeholder="UlangiPassword"><br>
<input type="text" name="email" id="email" placeholder="Email"><br>
<input type="text" name="telp" id="telp" placeholder="NomorTelpon"><br>
<textarea id="alamat" style="width: 167px;">Alamat</textarea><br>
<input type="submit" name="" value="Submit">
</form>
<script type="text/javascript">
function validateForm(){
	var username = document.formTugas.username.value;
	var password = document.formTugas.pass.value;
	var repeat = document.formTugas.repeat.value;
	var telp = document.formTugas.telp.value;
	var alamat = document.formTugas.alamat.value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if((username.length<3) || (username.length>15)){
		alert("Username harus 3-15 Karakter");
		return false;
	}
	
	if((password.length > 3) || (repeat.length > 3)){
		if(repeat == password){
		}else{
			alert("Password dengan Repeat Password Harus Sama");
			return false;
		}
	}else{
		alert("Password harus 4 digit harus ada huruf besar symbol dan angka");
		return false;
	}
	
	if(email.value.match(mailformat)){
		document.formTugas.email.focus();
	}else{
		alert("Alamat email tidak valid!");
		document.formTugas.email.focus();
		return false;
	}	
	
	if((telp.length<10) || (telp.length>12)){
		alert("Nomor telepon harus 10 - 12 Digit");
		return false;
	}

	if(alamat == ""){
		alert("Alamat tidak boleh kosong");
		return false;
	}
}
</script>
</body>
</html>