
<?php

session_start();
session_unset();
session_destroy();

if (!isset($_SESSION['rm_email'])) {
    header("Location: login.php");
}

?>