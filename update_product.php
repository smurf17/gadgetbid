<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$stock = $_POST['stock'];
$description = $_POST['desc'];
$price = $_POST['price'];
 
// update data ke database
mysqli_query($koneksi,"update product set name='$name',image='$image',stock='$stock', description='$description', price='$price' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>