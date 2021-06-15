<?php 

session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

$koneksi= new mysqli("localhost", "root", "", "mahasiswa");/* baris ini untuk menghubungkan kedatabase */

if (isset($_GET['npm'])) {

	
$ab=$_GET['npm'];
function hapus($ab)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE  FROM datamahasiswa WHERE npm=$ab");
	return mysqli_affected_rows($koneksi); 

}

}




else{
	header("Location: daftar mahasiswa.php");

}


if (hapus($ab) > 0) {
	echo "<script> alert(' data BERHASIL dihapus');
	document.location.href = 'daftar mahasiswa.php';
	</script>";

}

else{
	echo "<script> alert(' data GAGAL dihapus');
	document.location.href = 'daftar mahasiswa.php';
	</script>";
	
}
?>


