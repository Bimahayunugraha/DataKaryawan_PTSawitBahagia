<?php
//Include koneksi database
include 'config.php';

//Menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telepon = $_POST['telepon'];
$tahunmasuk= $_POST['tahunmasuk'];

//Menginput data ke database
mysqli_query($koneksi, "insert into karyawan(nama,ktp,telepon,tahunmasuk) values('$nama','$ktp','$telepon','$tahunmasuk')");

//Mengembalikan ke halaman awal
include 'employee.php';