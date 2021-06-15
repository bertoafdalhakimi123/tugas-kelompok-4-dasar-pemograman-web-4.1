<?php 


session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	

<tr>
	<td>Npm Mahasiswa</td>
	<td><input type="text" name="a" id="a" autofocus="" autocomplete="off" required="" minlength="3"></td>
</tr>
<tr>
	<td>Nama Mahasiswa</td>
	<td><input type="text" name="b" id="b" autocomplete="off" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Nilai Bahasa Indonesia </td>
	<td><input type="text" name="c" id="c" autocomplete="off" required="" minlength="1"></td>
	</tr>
	<td>Nilai Agama</td>
	<td><input type="text" name="d" id="d" autocomplete="off" required="" minlength="1"></td>
	</tr>
	<tr>
	<td>Nilai bahasa inggris</td><td><input type="text" name="e" id="e" autocomplete="off" required="" minlength="1"></td></tr>
<tr>
<td>Nilai Pkn</td>
<td><input type="text" name="f" id="f" autocomplete="off" required="" minlength="1">
</td>
</tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar Mahasiswa.php" style="text-decoration: none;">kembali kedaftar</a></button></b>
</td>
</tr>
</table>
</center>
</body>
<footer >
<div style="text-align: right;position: fixed;z-index:100;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height:7;display:block !important; color: green;"><b>Kelompok 4</b></div>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {

	$npm=htmlspecialchars($_POST['a']);
	$nama=htmlspecialchars($_POST['b']);
	$nilai_bahasa=htmlspecialchars($_POST['c']);
	$nilai_agama=htmlspecialchars($_POST['d']);
	$nilai_bahasainggris=htmlspecialchars($_POST['e']);
	$nilai_pkn=htmlspecialchars($_POST['f']);
	
	$koneksi= new mysqli("localhost", "root", "", "mahasiswa");/* baris ini untuk menghubungkan kedatabase */
	$sql="INSERT INTO `datamahasiswa` VALUES ('".$npm."', '".$nama."', '".$nilai_bahasa."', '".$nilai_agama."', '".$nilai_bahasainggris"', '".$nilai_pkn."');";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL tambahkan');
document.location.href = 'daftar mahasiswa.php';
	
	</script>";
}

else{
	echo "<script> alert(' data GAGAL tambahkan');
document.location.href = 'inputdata.php';
	</script>";
}

}



 ?>
