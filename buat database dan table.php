<?php 

$koneksi= new mysqli("localhost", "root", "", "");
$sql= "CREATE DATABASE mahasiswa";
$q=$koneksi->query($sql);
if ($q) {
	echo "database berhasil dibuat";
}

else{
	echo "database gagal dibuat";

}
$sql1= "CREATE TABLE `mahasiswa`.`datamahasiswa` ( `npm` INT NOT NULL , `nama` VARCHAR(50) NOT NULL , `nilai_bahasa` VARCHAR(5) NOT NULL , `nilai_agama` VARCHAR(5) NOT NULL , `nilai_bahasa inggris` VARCHAR(5) NOT NULL , `nilai_pkn` VARCHAR(5) NOT NULL , PRIMARY KEY (`npm`)) ENGINE = InnoDB; ";




$q1=$koneksi->query($sql1);

if ($q1) { 
	echo "<br>";
	echo "table berhasil dibuat";
}
else{
echo "<br>";
	echo "table gagal dibuat";
}


?>






