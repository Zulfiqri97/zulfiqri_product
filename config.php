<?php
//connect to databse
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpai";

try { //coba konekin
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //set eror
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
};

// //menambah barang baru
// if (!isset($_POST['addnewbarang'])) {
//     $namabarang = $_POST['namabarang'];
//     $deskripsi = $_POST['deskripsi'];
//     $stock = $_POST['stock'];

//     $addtotable = mysqli_query($conn, "INSERT INTO barang (namabarang, deskripsi, stock) VALUES ('$namabarang','$deskripsi','$stock')");
// }
