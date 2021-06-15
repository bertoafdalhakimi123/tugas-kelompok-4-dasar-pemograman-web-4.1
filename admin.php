<?php 
$koneksi= new mysqli("localhost", "root", "", "mahasiswa");
$sql2="CREATE TABLE `mahasiswa`.`admin` ( `id` INT NOT NULL AUTO_INCREMENT , `nama` varchar(50) NOT NULL , `password` varchar(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
$q1=$koneksi->query($sql2);

if ($q1) { 
	echo "<br>";
	echo "table berhasil dibuat";
}
else{
echo "<br>";
	echo "table gagal dibuat";
}
$cek=mysqli_query($koneksi, "SELECT * FROM admin");
$sql3="INSERT INTO `admin` VALUES (NULL, 'berto', '08berto;";

$q2=$koneksi->query($sql3);


if ($q2) { 
	echo "<br>";
	echo "data berhasil diinput";
}
else{
echo "<br>";
	echo "data berhasil diinput";
}

 ?>

