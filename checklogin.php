<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

date_default_timezone_set('Europe/London');

// Database details
$host = "localhost";
$username = "in21006285";
$password = "26671626";
$db_name = "in21006285";
$tbl_name = "ACCOUNTS357";

// Connect to database
$con = mysqli_connect($host, $username, $password, $db_name)
       or die(mysqli_error($con));

// Get values from login form
$myusername = $_POST['User'] ?? '';
$mypassword = $_POST['Pass'] ?? '';

// Clean input
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

// Salt & hash password
$salt = "dontcrackmywebsite";
$hash = crypt($mypassword, $salt);

// SQL query
$sql = "SELECT Account_ID, username
        FROM $tbl_name
        WHERE username = '$myusername'
        AND password = '$hash'";

$result = mysqli_query($con, $sql);

// Check result
if ($result && mysqli_num_rows($result) === 1) {

    // Fetch user data
    $row = mysqli_fetch_assoc($result);

    // Store session variables
    $_SESSION['myusername'] = $row['username'];
    $_SESSION['memberno']   = $row['Account_ID'];

    // Redirect to store.php
    header("Location: store.php");
    exit;

} else {

    // Capture IP and date
    $ip = $_SERVER["REMOTE_ADDR"];
    $date = date("d-m-Y H:i:s");

    // Log failed login (no password logging)
    $file = "login.txt";
    $current = file_exists($file) ? file_get_contents($file) : '';
    $current .= "Failed login for user: $myusername from IP $ip on $date\r\n";
    file_put_contents($file, $current);

    echo "Wrong Username or Password";
}

// Close database
mysqli_close($con);
?>