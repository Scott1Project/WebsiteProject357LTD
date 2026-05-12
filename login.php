<!DOCTYPE html>
<html>
<head>
    <script src="login.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/colors.css">
	<link rel="stylesheet" href="css/title.css">
</head>



<body>


<div class="logotitle">
<table>

<td><img src="img/uhi_logo_low.png" alt="UHI logo"></td>
<td><h1>WaterSports Club</h1></td>

</table>


</div>

<div class="memberform">
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
