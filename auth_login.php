<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data_user = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data_user);
    
if($cek > 0){
    $data = mysqli_fetch_assoc($data_user);
    $id = $data['id'];
    if ($data["role"] == "user") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:index.php?username='$username'&id='$id'");
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin.php?username='$username'");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>