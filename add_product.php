<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$image = $_POST['image'];
$stock = $_POST['stock'];
$description = $_POST['description'];
$price = $_POST['price'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into product values('','$name','$image','$stock', '$description', '$price')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>