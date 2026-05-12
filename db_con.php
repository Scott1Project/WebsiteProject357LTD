<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

// Database configuration
$host = "localhost";
$username = "in21006285";
$password = "26671626";
$db_name = "in21006285";
$tbl_name = "ACCOUNTS357";

// MySQLi connection (for backward compatibility)
$con = mysqli_connect($host, $username, $password, $db_name);
if (mysqli_connect_errno()) {
    die("MySQLi Connection failed: " . mysqli_connect_error());
}

// PDO connection (for modern usage)
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db_name;charset=UTF8",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("PDO Database connection failed: " . $e->getMessage());
}
?>
