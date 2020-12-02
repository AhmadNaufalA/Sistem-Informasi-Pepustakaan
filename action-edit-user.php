<?php

include 'config.php';

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$alamat = $_POST['alamat'];
$mobile = $_POST['mobile'];


mysqli_query($mysqli, "UPDATE user SET nama='$nama', alamat='$alamat', mobile='$mobile', kode='$kode'WHERE nama='$nama'");



header("location:index_admin.php");

?>