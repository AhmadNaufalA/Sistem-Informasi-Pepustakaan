<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nama = $_GET['nama'];

// Delete user row from table based on given id
mysqli_query($mysqli, "DELETE FROM user WHERE nama='$nama'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_admin.php");
?>
