<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY nama DESC");
$resultLeft = mysqli_query($mysqli, "SELECT user.nama, buku.judul, buku.kode FROM user LEFT JOIN buku ON user.kode = buku.kode ORDER BY user.nama DESC");

?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style2.css">



<h2>Sistem Informasi Perpustakaan</h2>
	
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
        </form>

    <h2>Daftar Peminjam</h2>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th><th>NIM</th><th>Kode</th><th>Alamat</th><th>Mobile</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {    
        ?>     
    <tr>
                            <td ><?php echo $data['nama']; ?></td>
							<td ><?php echo $data['nim']; ?></td>
                            <td ><?php echo $data['kode']; ?></td>
							<td ><?php echo $data['alamat']; ?></td>
                            <td ><?php echo $data['mobile']; ?></td>
                            

                      </tr>
<?php } ?>
    
    </table>
    <br/>
	<table width='80%' border=1>

<tr>
    <th>Nama</th> <th>Judul Buku</th> <th>kode</th> 
</tr>
<?php  
while($user_data = mysqli_fetch_array($resultLeft)) {         
    echo "<tr>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['judul']."</td>";
    echo "<td>".$user_data['kode']."</td>";

}
?>
</table>
<a href="join.php">Join</a><br/><br/>
<a href="daftarbuku.php">Daftar Buku</a><br/><br/>
<a href="cariuser.php">Cari User</a><br/><br/>
<a href="caribuku.php">Cari Buku</a><br/><br/>
</body>
</html>
