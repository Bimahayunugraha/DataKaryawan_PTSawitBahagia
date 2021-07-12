<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telepon = $_POST['telepon'];
$tahunmasuk= $_POST['tahunmasuk'];

mysqli_query($koneksi, "update karyawan set nama='$nama', ktp='$ktp', telepon='$telepon', tahunmasuk='$tahunmasuk' where id = '$id'");
header("location:employee.php");