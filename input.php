<html>
<head>
    <title>Input Produk</title>
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

    <form action="input.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id_produk</td>
                <td><input type="text" name="id_produk"></td>
            </tr>
            <tr> 
                <td>nama_produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        include("koneksi.php");
        $result = mysqli_query($mysqli, "INSERT INTO produk(id_produk,nama_produk,keterangan,harga,jumlah) VALUES('$id_produk','$nama_produk','$keterangan','$harga','$jumlah')");

        echo "Produk berhasil ditambahkan. <a href='index.php'>Lihat Daftar</a>";
    }
    ?>
</body>
</html>