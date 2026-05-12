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

	<h2>Member Login</h2>
	
	<div class="form-group">
		<label for="User">Username</label>
		<input id="User" name='User' type='text' placeholder="Enter your username" required>
		<div id='errorUser' style='color: red; font-size: 14px;'></div>
	</div>

	<div class="form-group">
		<label for="Pass">Password</label>
		<input id="Pass" name='Pass' type='password' placeholder="Enter your password" required>
		<div id='errorPassword' style='color: red; font-size: 14px;'></div>
	</div>

	<button type="submit" name="Submit" id="LoginButton">Login</button>
	
</form>
</div>

</div>
</body>
</html>
