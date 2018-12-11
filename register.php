<!DOCTYPE html>
<html>
<head>
	<title>User Registration - Orion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css"> 
</head>
<body>
<?php 
	require('header.php');
if (isset($_GET['user']) && isset($_GET['email'])) {
	$user = $_GET['user'];
	$email = $_GET['email'];
	echo "<span class='emailmessage'>Hello " . $user . ", your account has been set up. Click login button to log in</span>";
} 
elseif(!empty($_GET['error9'])){

	echo "<span class='emailmessage'>" . urldecode($_GET['error9']) . "</span>";
}

?>
<form method="post" action="index.php" enctype="multipart/form-data">
		<table cellpadding="5" cellspacing="5" border="1"><caption style="font-size: 24px;"><hr>User Registration</caption>
		<tr><td><label>First Name</label></td><td><input type="text" name="firstname" id="firstname" placeholder="First name"><div id="fname">
		<?php if (!empty($_GET['error1'])) {
				echo urldecode($_GET['error1']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Last Name</label></td><td><input type="text" name="lastname" id="lastname" placeholder="Last name"><div id="lname">
			<?php if (!empty($_GET['error2'])) {
				echo urldecode($_GET['error2']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Gender</label></td><td><select name="gender" id="gender" >
			<option value="Female" selected="selected">Female</option>
			<option value="Male">Male</option>
		</select></td></tr>
		<tr><td><label>Password</label></td><td><input type="password" name="password" id="password" placeholder="Password"><div id="pass_word">
			<?php if (!empty($_GET['error3'])) {
				echo urldecode($_GET['error3']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Re-enter Password</label></td><td><input type="password" name="reenterpass" id="reenterpass" placeholder="Re-enter Password"><div id="pword">
			<?php if (!empty($_GET['error4'])) {
				echo urldecode($_GET['error4']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Email</label></td><td><input type="text" name="email" id="email" placeholder="Email"><div id="mail">
			<?php if (!empty($_GET['error5'])) {
				echo urldecode($_GET['error5']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Phone</label></td><td><input type="text" name="phone" id="phone" placeholder="+2347869877890"><div id="phon">
			<?php if (!empty($_GET['error6'])) {
				echo urldecode($_GET['error6']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>Address</label></td><td><textarea name="address" id="address" cols="25" rows="3"  placeholder="Address"></textarea><div id="add">
			<?php if (!empty($_GET['error7'])) {
				echo urldecode($_GET['error7']);
		} 
		?>	
		</div></td></tr>
		<tr><td><label>State</label></td><td><input type="text" name="state" id="state" placeholder="State"><div id="sta">
			<?php if (!empty($_GET['error8'])) {
				echo urldecode($_GET['error8']);
		} 
		?>	
		</div></td></tr>
		<tr><td><input type="file" name="image" id="image"></td><td><span style="color: #fff; font-size: 13px; font-style: italic;">image format is in PNG, JPG or GIF.<br/> Size must be less than 1MB</span></td></tr>
		<tr><td><input type="submit" name="action" id="action" value="Register"></td><td></td></tr></table>
</form>
<?php
	require('footer.php');
?>
</body>
</html>