<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(!isset($_SESSION['myusername'])){
    header("location:main_login.php");
    exit;
}

$host="localhost";
$username="in21006285";
$password="26671626";
$db_name="in21006285";

$con = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Safely collect POST data
$myusername = $_POST['User'] ?? '';
$mypassword = $_POST['Pass'] ?? '';

// Escape all data
$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

// Hash password
$salt = "dontcrackmywebsite";
$hash = crypt($mypassword, $salt);

// INSERT query for login table
$query = "INSERT INTO ACCOUNTS357 (username, password) VALUES ('$myusername', '$hash')";

// Run query
if (!mysqli_query($con, $query)) {
    die("Database error: " . mysqli_error($con));
}

mysqli_close($con);

header("Location: index.html");
exit;
?>