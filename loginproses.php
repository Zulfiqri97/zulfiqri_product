<?php ob_start(); ?>
<?php session_start(); ?>
<?php require 'config.php'; ?>

<?php
$email = $_POST['email'];
$password = $_POST['password'];

try {
    $sql = "SELECT * FROM users WHERE email = ? AND password = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($email, md5($password)));
    // echo "svdhgsdsg";
    $count = $stmt->rowCount();

    if ($count == 1) {
        $result = $stmt->fetch(PDO::FETCH_BOTH);
        $_SESSION['rm_id'] = $result['id'];
        $_SESSION['rm_email'] = $result['email'];
        $_SESSION['rm_name'] = $result['name'];
        header("Location: index.php");
    } else {
        $_SESSION['message'] = 'Email atau Password salah';
        header("Location: login.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
