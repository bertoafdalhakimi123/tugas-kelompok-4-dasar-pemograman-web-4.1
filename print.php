<?php  

$koneksi= new mysqli("localhost", "root", "", "mahasiswa"); /* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query($koneksi, "SELECT * FROM datamahasiswa");/* baris ini menampilkan semua data dari tabel kendaraan */
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px" cellpadding="15px" cellspacing="0" width="100%">	
<tr>
	<th>No</th>
	<th>Npm</th>
	<th>Nama</th>
	<th>Nilai Bahasa Indonesia</th>
	<th>Nilai Agama  </th>
	<th>Nilai bahasa inggris</th>
	<th>Nilai Pkn</th>
</tr>
<?php $i=1; ?>
	<?php  while ($row=mysqli_fetch_assoc($cek) ) :{
		} ?>
		<td><?php echo $i; ?></td>
	<td><?php echo$row["npm"]; ?></td><?php /* baris ini menampikan data dari  dari tabel kendaraan berdasarkan name atau nama */ ?>
	<td><?php echo$row["nama"]; ?></td>

	<td ><?php echo$row["nilai_bahasa"]; ?></td>
	<td ><?php echo$row["nilai_agama"]; ?></td>
	<td ><?php echo$row["nilai_bahasa inggris"]; ?></td>
	<td ><?php echo$row["nilai_pkn"]; ?></td>

</tr>
<?php $i++; ?>
<?php  endwhile;  /* baris ini berfungsi mengakhiri perulangan while */?>
</table>





<script type="text/javascript">
	
window.print();

</script>
</body>
</html>