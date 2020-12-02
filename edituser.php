
<?php
include "config.php";
// Display selected user data based on id
// Getting id from url
$nama = $_GET['nama'];
// $kode = $_GET['kode'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE nama='$nama'");

while($data = mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $kode = $data['kode'];
    $alamat = $data['alamat'];
    $mobile = $data['mobile'];
    }
?>
<html>
<head>  
    <title>Edit Data Pengguna</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="index_admin.php">Kembali ke halaman awal</a>
    <br/><br/>

    <h2>Edit User</h2>

    <form name="update_user" method="post" action="action-edit-user.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" readonly value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
