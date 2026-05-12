<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

$host="localhost"; // Host name
$username="in21006285"; // Mysql username
$password="26671626"; // Mysql password
$db_name="in21006285"; // Database name
$tbl_name="ACCOUNTS357"; // Table name


// Connect to server and select database.
$con = mysqli_connect($host, $username, $password)or die(mysqli_error($con));
mysqli_select_db($con,$db_name) or die(mysqli_error($con));
