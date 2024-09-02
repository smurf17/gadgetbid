<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$no_phone = $_POST['no_phone'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$username','$password','$birth_date','$gender','$email','$no_phone')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>