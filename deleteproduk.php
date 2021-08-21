<?php
//connect to databse
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpai";
//buat definisi variabel dulu sebelum membuat output
$idbarang = $_GET['idbarang'];
// $namabarang = $_POST['namabarang'];
// $deskripsi = $_POST['deskripsi'];
// $stock = $_POST['stock'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //sesuaikan data dengan tabel database
    $sql = "DELETE FROM barang WHERE idbarang";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "
        <script type='text/javascript'>
        alert('Data Berhasil Di Hapus!');
        window.location='produk.php'
        </script>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
