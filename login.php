<!DOCTYPE html>
<html>
<head>
    <script src="login.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/colors.css">
	<link rel="stylesheet" href="css/title.css">
</head>



<body>

<div class="navbar">
  <img src="img/logo.png" alt="357 LTD Logo">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="event.php">Events</a></li>
    <li><a href="store.php">Store</a></li>
  </ul>
</div>

<div class="box">

<div class="logotitle">


<h1 id="title">Account Login</h1>



</div>

<div class="loginbox">
<form name="userForm" method="post" action="checklogin.php" id='loginform' onsubmit="return validateUser() && validatePass();">

	<table>
	<tr>
	<td colspan='3'><strong><h2>Member Login</h2></strong></td>
	</tr>
	<tr>
	<td><h1>Username</h1></td>
	<td><input name='User' type='text'><div id='errorUser' style='color: red;'></div></td>
	</tr>
	<tr>
	<td><h1>Password</h1></td>
	<td><input name='Pass' type='password'><div id='errorPassword'style='color: red;'></div></td>
	</tr>
	<tr>
    <td colspan="2" style="text-align: center;">
        <input type="submit" name="Submit" value="Login" id="LoginButton">
    </td>
</tr>
</form>
</table>
</div>

</div>
</body>
</html>
