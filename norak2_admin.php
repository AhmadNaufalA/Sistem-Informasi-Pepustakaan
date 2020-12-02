<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM rak2");
?>


<html>
<head>
    <title>Rak</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
    <a href="index_admin.php">Kembali ke halaman awal</a>
    <br/><br/>

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
