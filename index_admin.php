<?php
// Create database connection using config file
include_once("config.php");
session_start();
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
 
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY kode DESC");
?>

<br/>
<br/>
<a href="logout.php">LOGOUT</a><br/><br/>





<html>
<head>    
    <title>Homepage Admin</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="adduser.php">Add New User</a><br/><br/>
<a href="addbuku.php">Add Buku</a><br/><br/>
<a href="daftarbuku_admin.php">Daftar Buku</a><br/><br/>


    <h2>Daftar Peminjam</h2>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Kode</th><th>Alamat</th><th>Mobile</th><th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {    
        ?>     
    <tr>
                            <td ><?php echo $data['nama']; ?></td>
                            <td ><?php echo $data['kode']; ?></td>
                            <td ><?php echo $data['alamat']; ?></td>
                            <td ><?php echo $data['mobile']; ?></td>
                            <td>
                            <a href ="edituser.php?nama=<?php echo $data['nama']; ?>" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                             <a href ="deleteuser.php?nama=<?php echo $data['nama']; ?>"  class="btn btn-danger btn-rounded btn-sm my-0">Hapus</a>

                            </td>

                        </tr>
<?php } ?>
    
    </table>
    <br/>
    <a href="join_admin.php">Join</a><br/><br/>
    <a href="norak1_admin.php">Rak 1</a><br/><br/>
    <a href="norak2_admin.php">Rak 2</a><br/><br/>

</body>
</html>
