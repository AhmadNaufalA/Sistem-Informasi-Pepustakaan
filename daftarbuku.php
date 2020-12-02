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
<link rel="stylesheet" type="text/css" href="style2.css">
<a href="index.php">kembali ke halaman awal</a><br/><br/>


    <h2>Daftar Buku</h2>

    <table width='80%' border=1>

    <tr>
        <th>Judul</th> <th>Kode</th><th>Penerbit</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {    
        ?>     
    <tr>
                            <td ><?php echo $data['judul']; ?></td>
                            <td ><?php echo $data['kode']; ?></td>
                            <td ><?php echo $data['penerbit']; ?></td>
                            
                            

                        </tr>
<?php } ?>
    
    </table>
</body>
</html>
