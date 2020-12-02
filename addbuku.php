<html>
<head>
    <title>Add buku</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="index_admin.php">Kembali ke halaman awal</a>
    <br/><br/>


    <h2>Menambahkan Buku</h2>

    <form action="addbuku.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr> 
                <td>Judul Buku</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr> 
                <td>Kode Buku</td>
                <td><input type="text" name="kode"></td>
            </tr>

            <tr> 
                <td>Nomor Rak</td>
                <td><input type="text" name="norak"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) 
    {   
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $kode = $_POST['kode'];
        $norak = $_POST['norak'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO buku(judul,penerbit,kode,norak) VALUES ('$judul', '$penerbit','$kode','$norak')");

        // Show message when user added
        echo "User added successfully. <a href='daftarbuku_admin.php'>Daftar Buku</a>";
    }
    ?>
</body>
</html>
