<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$no_phone = $_POST['no_phone'];
 
// update data ke database
mysqli_query($koneksi,"update user set username='$username',password='$password',birth_date='$birth_date', gender='$gender', email='$email', no_phone='$no_phone' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:profile.php?username='$username'");
 
?>