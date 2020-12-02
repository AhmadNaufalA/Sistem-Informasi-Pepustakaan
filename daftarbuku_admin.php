<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY kode DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="index_admin.php">kembali ke halaman awal</a><br/><br/>


    <h2>Daftar Buku</h2>

    <table width='80%' border=1>

    <tr>
        <th>Judul</th> <th>Kode</th><th>Penerbit</th><th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {    
        ?>     
    <tr>
                            <td ><?php echo $data['judul']; ?></td>
                            <td ><?php echo $data['kode']; ?></td>
                            <td ><?php echo $data['penerbit']; ?></td>
                            <td>
                            <a href ="editbuku.php?kode=<?php echo $data['kode']; ?>" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                             <a href ="deletebuku.php?kode=<?php echo $data['kode']; ?>"  class="btn btn-danger btn-rounded btn-sm my-0">Hapus</a>

                            </td>

                        </tr>
<?php } ?>
    
    </table>
</body>
</html>
