<?php 

session_start();
if (isset($_SESSION["login"])) {
	header("Location:daftar mahasiswa.php");
	exit;
}





if (isset($_POST["login"])) {
$koneksi= new mysqli("localhost", "root", "", "mahasiswa");
$nm= $_POST['nama'];
$password=$_POST['password'];
$md5=md5($password);

$q=  "SELECT * FROM admin WHERE  nama='$nm' AND password='$password' ";
$b=$koneksi->query($q);

if ($b->num_rows>0) {
	echo "<script> alert('Halo selamat datang admin.!');
		document.location.href = 'daftar mahasiswa.php';

		</script>";
		$_SESSION["login"]= true;
}

else{
		echo "<script> alert('gagal, password atau nama salah');
		document.location.href = 'login.php';

		</script>";
}
}

 ?>
<!DOCTYPE html>
<html >
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
	

body{
	background-color: silver;
}

	footer{
			background-color: blue;
			left: 0;
			bottom: 0;
			position:absolute;
			overflow: hidden;
			width: 100%;

		}


		table{
			margin-top: 7%;

			width: 40%;
			background-color: red;
		}
b{
	font-size: 24px;
	color: green;
}

</style>

	<title>login</title>
</head>
<body>
<marquee> <b>Selamat datang, Silahkan Login</b> </marquee>
<center>
	<form name="ab" method="POST" action="" onsubmit=" return validasi()">
		<div class="Y">
	<table>
		<tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr>
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama" id="nama" placeholder="Nama" minlength="3" required="" maxlength="27" autofocus="" autocomplete="off" size="50px"> </td>
</tr>
<tr>
	<td>password</td>
		<td><input type="password" name="password" id="password" placeholder="masukkan password" minlength="3" required="" autocomplete="off" size="50px"></td>
	</tr>
		<tr>
		<td>validasi</td>
		<td><input type="text" name="cek" placeholder="Kode Disamping --->"  maxlength="16" required="" autocomplete="off" size="34px"><span id="B"></span></td>
		
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" value="Login" name="login">Login</button> <button><a href="daftar Mahasiswa.php" style="text-decoration: none; size: 15px;">kembali kedaftar</a></button></b></td>
	</tr>
<tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr><tr>
	<td></td>
</tr>
</table></div></form>
	</center>
 
<footer >
<div style="text-align: right;position: fixed;z-index:100;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height:7;display:block !important; color: green;"><b>Kelompok 4</b></div>
</footer>
<script type="text/javascript">
	
	alert('Anda harus login dulu');

	var i=(Math.floor (Math.random()*999999999999));
			var hasil= document.getElementById("B");
			hasil.innerHTML=i;
function validasi() {

	var a= document.forms["ab"]["cek"].value;

	if (a!=i) {

		alert("validasi salah");
		document.location.href = 'login.php';

	return false;
	}

}
</script>
</body>
</html>
