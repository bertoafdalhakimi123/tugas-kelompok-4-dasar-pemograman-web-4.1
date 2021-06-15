<?php 
$koneksi= new mysqli("localhost", "root", "", "mahasiswa"); /* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query($koneksi, "SELECT * FROM datamahasiswa");



$w="INSERT INTO `datamahasiswa` (`npm`, `nama`, `nilai_bahasa indonesia`, `nilai_agama`, `nilai_bahasa inggris`, `nilai_pkn`) VALUES
(1955201024,'YOGA MUHAMAD ARYANTO', '75', '75', '75', '75'),
(1955201131,'YONALDO PUTRA', '75', '75', '75', '75'),
(1955201076,'ZETER EDHAR PADLI', '75', '75', '75', '75'),
(1955201023,'BERTO AFDAL HAKIMI '75', '75', '75', '75'),
$q=$koneksi->query($w);

if ($q) { 
	echo "<br>";
	echo "data berhasil dimasukkan";
}
else{
echo "<br>";
	echo "data gagal dimasukkan dibuat";
}



 ?>