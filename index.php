<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/JSNStyle.css">

<title>JSN HOME</title>
</head>
<body class="body">


	<div id="headerContainerDiv" class="headerClass">
		<img alt="headerImage" src="images/headerimg.jpg">
		<?php
		if (isset ( $_SESSION ['loggedin'] ) && $_SESSION ['loggedin'] == TRUE && $_SESSION ['ip'] == $_SERVER ['REMOTE_ADDR']) {
			?>
		<div id="loggedInDiv" class="loggedInClass">
			<h1>Welcome $_SESSION['username']</h1>
		</div>
		<?php }else{?>
		<div id="loggedOutDiv" class="loggedOutClass">
			<h1>login</h1 >
		</div>
		<?php }?>
	</div>


	<div id="page" class="page-section"></div>


</body>
</html>