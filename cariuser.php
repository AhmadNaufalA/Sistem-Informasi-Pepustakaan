<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `user` WHERE CONCAT(`nama`, `nim`, `mobile`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `user`";
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
        
        <form action="cariuser.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Mobile</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['nim'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
    <a href="index.php">Kembali ke halaman awal</a><br/><br/>
</html>