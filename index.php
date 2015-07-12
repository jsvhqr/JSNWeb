<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/JSNStyle.css">
<script src="javascript/functions.js" type="text/javascript"></script>
<title>JSN HOME</title>
</head>
<body>
	<div id="header">
		<div id="mainPageHeading">
			<h1>JSN under construction</h1>
		</div>
		
		<?php
		session_start();
		if (isset ( $_SESSION ['loggedin'] ) && $_SESSION ['loggedin'] == TRUE && $_SESSION ['ip'] == $_SERVER ['REMOTE_ADDR']) {
			?>
		<div id="loggedInNav" class="Nav">
			<ul class="Nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="php/user.php"><?php echo $_SESSION['username']; ?></a></li>
				<li><a href="php/logout.php">Logout</a></li>
			</ul>
		</div>
		<?php }else{?>
		<div id="loggedOutNav " class="Nav">
			<ul class="Nav">
				<li><a href="index.php">Home</a></li>
				<li><label onclick="changeLogin()">Login</label></li>
				<li><label onclick="changeRegister()">Register</label></li>
			</ul>
		</div>
		<?php }?>
	</div>
	<div id="loginAndRegisterContainer">
		<div id="loginForm" class="dropDownForm">
			<form class="dropDownForm" action="php/login.php" method="post">
				<input type="text" placeholder="Username" name="username"><br> 
				<input type="password"placeholder="Password" name ="password"><br> 
				<input type="submit" value="login">
			</form>
		</div>
		<div id="registerForm" class="dropDownForm">
			<form class="dropDownForm" action="php/register.php" method="post">
				<input type="text" placeholder="Enter Username" name="username"><br>
				<input type="password" placeholder="Enter PassPhrase" name="password"><br>
				<input type="text" placeholder="Enter email" name="email"><br>
				<input type="submit" value="signup">
			</form>
		</div>
	</div>

	<div id="content"></div>


</body>
</html>