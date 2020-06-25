<?php
include("koneksi.php");

if(isset($_POST['update']))
{   
    $id_produk = $_POST['id_produk'];

    $nama_produk=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];

    $result = mysqli_query($mysqli, "UPDATE produk SET id_produk='$id_produk',nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id_produk=$id_produk");

    header("Location: index.php");
}
?>
<?php

$id_produk = $_GET['id_produk'];

$result = mysqli_query($mysqli, "SELECT * FROM produk ");

while($user_data = mysqli_fetch_array($result))
{
    $id_produk = $user_data['id_produk'];
    $nama_produk = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>  
    <title>Edit data produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
            </ul>
        </nav>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>id_produk</td>
                <td><input type="text" name="id_produk" value=<?php echo $id_produk;?>></td>
            </tr>
            <tr> 
                <td>nama_produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
            </tr>
            <tr> 
                <td>keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_produk" value=<?php echo $_GET['id_produk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>