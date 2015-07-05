<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/JSNStyle.css">

<title>JSN HOME</title>
</head>
<body>
	<div id="header">
		<div id="mainPageHeading">
			<h1>JSN under construction</h1>
		</div>
	
		<?php
		if (isset ( $_SESSION ['loggedin'] ) && $_SESSION ['loggedin'] == TRUE && $_SESSION ['ip'] == $_SERVER ['REMOTE_ADDR']) {
			?>
		<div id="loggedInNav" class="Nav">
			<ul class="Nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="user.php">$_SESSION['username']</a></li>
				<li><form action="logout.php" name="logoutForm" method="post">
						<label id="logoutLabel"><input type="submit" value="Log out"></label>
					</form></li>
			</ul>
		</div>
		<?php }else{?>
		<div id="loggedOutNav " class="Nav">
			<ul class="Nav">
				<li><a href="index.php">Home</a></li>
				<li><form action="login.php" name="loginForm" method="post">
						<label id="loginLabel"><input type="submit" value="Log in"></label>
					</form></li>
				<li><form action="register.php" name="registerForm" method="post">
						<label id="registerLabel"><input type="submit" value="Register"></label>
					</form></li>
			</ul>
		</div>
		<?php }?>
	</div>


	<div id="content"></div>


</body>
</html>