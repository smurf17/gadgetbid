<?php 
    include 'koneksi.php';
    $id = $_GET['id'];

    $data = mysqli_query($koneksi,"select * from cart_items where id_user = '$id'");

    $row = mysqli_fetch_assoc($data);
	
    header("location:cart_index.php?id='$id'", $row);        
            
?>