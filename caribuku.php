<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `buku` WHERE CONCAT(`judul`, `penerbit`, `kode`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `buku`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "tugas1sbd");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="style2.css">
        
        <form action="caribuku.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Kode</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['judul'];?></td>
                    <td><?php echo $row['penerbit'];?></td>
                    <td><?php echo $row['kode'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
    <a href="index.php">Kembali ke halaman awal</a><br/><br/>
</html>