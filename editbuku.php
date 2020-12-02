
<?php
include "config.php";
// Display selected user data based on id
// Getting id from url
$kode = $_GET['kode'];
// $kode = $_GET['kode'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE kode='$kode'");

while($data = mysqli_fetch_array($result))
{
    $judul = $data['judul'];
    $kode = $data['kode'];
    $penerbit = $data['penerbit'];
    $norak = $data['norak'];
    }
?>
<html>
<head>  
    <title>Edit Data Buku</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="index_admin.php">Kembali ke halaman awal</a>
    <br/><br/>

    <h2>Edit Buku</h2>

    <form name="update_buku" method="post" action="action-edit-buku.php">
        <table border="0">
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="judul" value=<?php echo $judul;?>></td>
            </tr>
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr> 
                <td>Nomor Rak</td>
                <td><input type="text" name="norak" value=<?php echo $norak;?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
