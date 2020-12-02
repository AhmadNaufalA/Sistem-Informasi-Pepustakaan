<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$resultLeft = mysqli_query($mysqli, "SELECT user.nama, buku.judul, buku.kode FROM user LEFT JOIN buku ON user.kode = buku.kode ORDER BY user.nama DESC");
$resultInner = mysqli_query($mysqli, "SELECT user.nama, buku.judul, buku.kode FROM user INNER JOIN buku ON user.kode = buku.kode ORDER BY user.nama DESC");
$resultRight = mysqli_query($mysqli, "SELECT user.nama, buku.judul, buku.kode FROM user RIGHT JOIN buku ON user.kode = buku.kode ORDER BY user.nama DESC");
?>

<html>
<head>    
    <title>Join</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style2.css">
<a href="index.php">Kembali ke halaman awal</a><br/><br/>

<h2>Left Join</h2>

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
</body>
</html>
<html>

<body>
<h2>Inner Join</h2>

<table width='80%' border=1>

<tr>
    <th>Nama</th> <th>Judul Buku</th> <th>kode</th> 
</tr>
<?php  
while($user_data = mysqli_fetch_array($resultInner)) {         
    echo "<tr>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['judul']."</td>";
    echo "<td>".$user_data['kode']."</td>";
    
}
?>
</table>
</body>
</html>
<html>

<body>
<h2>Right Join</h2>

<table width='80%' border=1>

<tr>
    <th>Nama</th> <th>Judul Buku</th> <th>Kode</th>
</tr>
<?php  
while($user_data = mysqli_fetch_array($resultRight)) {         
    echo "<tr>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['judul']."</td>";
    echo "<td>".$user_data['kode']."</td>";
     
}
?>
</table>
</body>
</html>
