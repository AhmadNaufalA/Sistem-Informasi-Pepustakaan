<html>
<head>
    <title>Add Users</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style.css">
    <a href="index_admin.php">Kembali ke halaman awal</a>
    <br/><br/>


    <h2>Menambahkan User</h2>

    <form action="adduser.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Kode Buku</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>

        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO user(nama,kode,nim,alamat,mobile) VALUES('$nama','$kode','$nim','$alamat','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index_admin.php'>Daftar Pengguna</a>";
    }
    ?>
</body>
</html>
