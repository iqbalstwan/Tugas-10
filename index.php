<?php
// Create database connection using config file
include("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="input.php">INPUT</a></li>
            </ul>
        </nav>

    <table width='80%' border=1>

    <tr>
        <th>id_produk</th> <th>nama_produk</th> <th>keterangan</th> <th>harga</th> <th>jumlah</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_produk']."</td>";
        echo "<td>".$user_data['nama_produk']."</td>";
        echo "<td>".$user_data['keterangan']."</td>"; 
        echo "<td>".$user_data['harga']."</td>"; 
        echo "<td>".$user_data['jumlah']."</td>";    
        echo "<td><a href='edit.php?id_produk=$user_data[id_produk]'>Edit</a> | <a href='delete.php?id_produk=$user_data[id_produk]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
        