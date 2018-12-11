<?php
session_start();
	if (isset($_SESSION['user']) && isset($_SESSION['num'])) {
		$firstname = $_SESSION['user'];
		$hellouser = "Hello" ." ". $firstname;
	}
	else{
		$hellouser = "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css"> 
</head>
<body>
<header>
	<img src="images/logo.png">
	<nav>
		<ul>
			<a href="<?php  
				if (isset($_SESSION['num'])) {
					echo "user.php";
				}
				else{
					echo "login.php";
				}
			?>
			"><li>Account</li></a>
			<a href="register.php"><li>Register</li></a>
			<a href="<?php if(isset($_SESSION['num'])) {
				echo "index.php?action=Logout"; 
			} else{
				echo "login.php";
			}
			?>"><li>
			<?php if(isset($_SESSION['num'])) {
				echo "Logout"; 
			} else{
				echo "Login";
			}
			?>	
			</li></a>
			<a href="about.php"><li>About Us</li></a>
		</ul>
		<?php  echo "<span>" . $hellouser . "</span>"; ?>
	</nav>
</header>
</body>
</html>