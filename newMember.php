<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host="localhost";
$username="in21006285";
$password="26671626";
$db_name="in21006285";

$con = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_error());
}

$myusername = $_POST['User'] ?? '';
$mypassword = $_POST['Pass'] ?? '';

$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

$salt = "dontcrackmywebsite";
$hash = crypt($mypassword, $salt);

$query = "INSERT INTO ACCOUNTS357 (username, password)
          VALUES ('$myusername', '$hash')";

if (!mysqli_query($con, $query)) {
    die("Database error: " . mysqli_error($con));
}

mysqli_close($con);

header("Location: index.html");
exit;
?>