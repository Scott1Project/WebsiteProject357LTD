<?php
//capture IP and date
$ip = $_SERVER["REMOTE_ADDR"];
$date = date("d-m-Y H:i:s");

//Append to file
$file = 'login.txt';
// Open the file to get existing content
$current = file_get_contents($file);

// Append login information to the file
$current .= "$user logged in from IP Address
of $ip on $date"."\r\n";

// Write the contents back to the file
file_put_contents($file, $current);

//insert code into login script
if ($result > 0) $validated = true;
 if($validated)
 {
 $_SESSION['login'] = "OK";
 $_SESSION['username'] = $user;
 $_SESSION['password'] = $pass;
 $ip = $_SERVER["REMOTE_ADDR"];
 $date = date("d-m-Y H:i:s");
 $file = 'login.txt';
 
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$user logged in from IP Address of $ip on $date"." \r\n";
// Write the contents back to the file
file_put_contents($file, $current);
 header('Location: protected1.php');
 }
 ?>