<?php

include 'config.php';

$judul = $_POST['judul'];
$kode = $_POST['kode'];
$penerbit = $_POST['penerbit'];
$norak = $_POST['norak'];


mysqli_query($mysqli, "UPDATE buku SET judul='$judul', penerbit='$penerbit', norak = '$norak'WHERE kode='$kode'");




header("location:daftarbuku_admin.php");

?>