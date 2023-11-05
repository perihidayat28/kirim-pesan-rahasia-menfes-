<?php 
$koneksi = mysqli_connect("localhost","root","","menfes");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>