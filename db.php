<?php
$host = "localhost";
$dbname = "in21006285";
$username = "in21006285";
$password = "26671626";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=UTF8",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed");
}
?>
