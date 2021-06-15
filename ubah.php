<?php  

session_start();
if (!isset($_SESSION["login"])) {

	
	header("Location: login.php");
	exit;
}
if (isset($_GET['npm'])) {

$koneksi= new mysqli("localhost", "root", "", "mahasiswa");/* baris ini untuk menghubungkan kedatabase */
$npm=$_GET['npm'];
$cek=mysqli_query( $koneksi,"SELECT * FROM datamahasiswa WHERE npm=$npm");/* baris ini mengambil data dari tabel kendaraan berdasarkan id yang diinput*/
}

else{
	header("Location: daftar mahasiswa.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	<?php ($row=mysqli_fetch_assoc($cek) );{
		 ?>
<tr>
	<td>Npm</td>
	<td><input type="text" name="a" id="a" value="<?php echo$row["npm"]; ?>" required="" minlength="3"></td>
</tr>
<tr>
	<td>Nama Mahasiswa</td>
	<td><input type="text" name="b" id="b" value="<?php echo$row["nama"]; ?>" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Nilai Bahasa Indonesia</td>
	<td><input type="text" name="c" id="c" value="<?php echo$row["nilai_bahasa"]; ?>" required="" minlength="1"></td>
	</tr>
	<tr>
	<td>Nilai Agama</td>
	<td><input type="text" name="d" id="d" value="<?php echo$row["nilai_agama"]; ?>" required="" minlength="1"></td>
	</tr><tr>
	<td>Nilai_bahasa inggris</td>
	<td><input type="text" name="e" id="e" value="<?php echo$row["nilai_bahasa inggris"]; ?>" required="" minlength="1"></td>
	</tr>
	<tr>
	<td>Nilai_Pkn</td><td><input type="text" name="f" id="f" value="<?php echo$row["nilai_pkn"]; ?>" required="" minlength="1"></td></tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar mahasiswa.php" style="text-decoration: none;">kembali kedaftar</a></button></b>

</td>
</tr>
<?php } ?>
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
	$sql="UPDATE `datamahasiswa` SET 
	 npm='$npm', nama='$nama', nilai_bahasa='$nilai_bahasa', nilai_agama='$nilai_agama', nilai_bahasa inggris='$nilai_bahasainggris', nilai_pkn='$nilai_pkn' WHERE npm=$npm

";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL diubah');
	
document.location.href = 'daftar mahasiswa.php';
	</script>";
}

else{
	echo "<script> alert(' data GAGAL diubah');
document.location.href = 'ubah.php';
	
	</script>";
}

}


 ?>



