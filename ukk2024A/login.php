<?php
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "<script> alert('Login Gagal!!!Password atau Username Salah!!'); </script>";
    }else if($_GET['pesan'] == "logout"){
        echo "<script> alert('Anda telah logout'); </script>";
    }else if($_GET['pesan'] == "belum_login"){
        echo "<script>alert('Anda harus login untuk mengakses halaman admin'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="config/css/login_style.css">
</head>
<body>
	<center><h2>FORM LOGIN</h2></center>
	<br>
	<div class="login">
		<br>
		<form action="ceklogin.php" method="post" onsubmit="return validasi()">
			<div>
				<label>Username</label>
				<input type="text" name="txtusername" id="txtusername">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="txtpassword" id="txtpassword">
			</div>
			<div>
				<input type="submit" name="blogin" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi(){
		var username=document.getElementById('txtusername').value;
		var password=document.getElementById('txtpassword').value;
		if(username!=""&&password!=""){
			return true;
		}else{
			alert("Username dan Password harus diisi!");
			return false;
		}
	}
</script>
</html>