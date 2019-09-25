
<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri
$koneksi = mysqli_connect("localhost","root","","Tugas1WebPrograming2");
 
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>