 <?php
    //connect to databse
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hpai";
    //buat definisi variabel dulu sebelum membuat output
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sesuaikan data dengan tabel database
        $sql = "INSERT INTO barang (namabarang, deskripsi, stock) 
  VALUES ('$namabarang','$deskripsi','$stock')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "
        <script type='text/javascript'>
        alert('Data Berhasil Di Tambahkan!');
        window.location='produk.php'
        </script>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
