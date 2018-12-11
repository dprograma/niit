<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<?php
require('header.php');

if (!empty($_GET['error'])) {
	
	echo "<span class='logindetails'>" . urldecode($_GET['error']) . "</span>";
}

?>
	<form method="post" action="index.php">
		<table cellpadding="5" cellspacing="5" border="1"><caption style="font-size: 24px;">User Login</caption>
			<tr><td><label>User Name</label></td><td><input type="text" name="username" id="username" placeholder="email@example.com"></td></tr>
			<tr><td><label>Password</label></td><td><input type="password" name="userpassword" id="userpassword" placeholder="Password"></td></tr>
			<tr><td></td><td><input type="submit" name="action" id="action" value="Login"></td></tr>
			<tr><td>Not Registered?</td><td></td></tr>
			<tr><td><a class="notregistered" href="register.php">Register</a></td><td></td></tr>
		</table>
	</form>
<?php
	require('footer.php');
?>
</body>
</html>