<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_GET['username'];
$data = mysqli_query($koneksi,"select * from product join user on product.id=user.id where product.id = '$id'");
// $data_user = mysqli_query($koneksi,"select * from user where username = '$username'");

$row = mysqli_fetch_array($data);
// $row2 = mysqli_fetch_array($data_user);

$id_user = $row['id'];
$name = $row['name'];
$price = $row['price'];
$quantity = 1;
 
// menginput data ke database
mysqli_query($koneksi,"insert into cart_items values('','$id_user','$name','$quantity', '$price')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?username='$username'&id='$id_user'");
 
?>