<?php
if (isset($_REQUEST['action'])) {
	require('config.php');

	switch ($_REQUEST['action']) {
		case 'Register':
			session_start();
			ob_start();
			$firstname = trim($_POST['firstname']);
			$lastname = trim($_POST['lastname']);
			$gender = $_POST['gender'];
			$password = trim($_POST['password']);
			$reenterpass = trim($_POST['reenterpass']);
			$email = trim($_POST['email']);
			$phone = trim($_POST['phone']);
			$address = trim($_POST['address']);
			$state = trim($_POST['state']);
			$image_dir= dirname(__FILE__)."/images/";
			$image=$_FILES['image']['name'];
			$imageName=$image_dir.$image;

			$error1 = "";
			if (empty($firstname) || is_numeric($firstname)) {
				$error1 .= "Invalid+firstname%21%0D%0A";
			}

			$error2 = "";
			if (empty($lastname) || is_numeric($lastname)) {
				$error2 .= "Invalid+lastname";
			}

			$error3 = "";
			if (empty($password)) {
				$error3 .= "Invalid+password%21%0D%0A";
			}

			$error4 = "";
			if ($password != $reenterpass) {
				$error4 .= "Password+mismatch%21%0D%0A";
			}

			$error5 = "";
			if (empty($email) || stripos($email, '@') == FALSE) {
				$error5 .= "Invalid+email%21%0D%0A";
			}

			$error6 = "";
			if (empty($phone) || !is_numeric($phone)) {
				$error6 .= "Invalid+phone+number%21%0D%0A";
			}

			$error7 = "";
			if (empty($address) ) {
				$error7 .= "Invalid+address%21%0D%0A";
			}

			$error8 = "";
			if (empty($state)) {
				$error8 .= "Invalid+entry%21%0D%0A";
			}

			$error9 = "";
			$sql = "SELECT * FROM usertable WHERE email = '$email'";
			$mysql = mysqli_query($conn,$sql);

			$row = mysqli_fetch_array($mysql);

			if ($row) {
				$error9 .= "Invalid+entry.+" . $email . "+already+exists+on+our+database%21%0D%0A";
			}

			if (empty($error1) && empty($error2) && empty($error3) && empty($error4) && empty($error5) && empty($error6) && empty($error7) && empty($error8) && empty($error9)) {

				if($_FILES['image']['size'] < 1000000) {
			move_uploaded_file($_FILES['image']['tmp_name'], $imageName);
				}

			$sql = "INSERT IGNORE INTO usertable(id,firstname,lastname,gender,password,email,phone,address,state,image,dateadded) VALUES(null,'$firstname','$lastname','$gender','$password','$email','$phone','$address','$state','$image',CURDATE())";

			$query = mysqli_query($conn,$sql);

				if ($query) {
					header("Location:register.php?user=$firstname&email=$email");
				
			}
		}else{
			header("Location:register.php?error1=$error1&error2=$error2&error3=$error3&error4=$error4&error5=$error5&error6=$error6&error7=$error7&error8=$error8&error9=$error9");
		}
			ob_end_flush();
			break;
			exit();

		case 'Login':
			session_start();
			ob_start();
			$username = trim($_POST['username']);
			$userpassword = trim($_POST['userpassword']);

			$sql = "SELECT * FROM usertable WHERE email = '" . $username . "' AND password = '" . $userpassword . "'";
			$query = mysqli_query($conn,$sql);

			$row = mysqli_fetch_array($query);
			
			if ($row) {
				$_SESSION['user'] = $row['firstname'];
				$_SESSION['num'] = $row['id'];
				header("Location:user.php");
			}
			else{
				$error = "Invalid+login+credentials.+Please+check+your+details+and+try+again%21%0D%0A";
				header("Location:login.php?error=$error");
			}
			
			ob_end_flush();
			break;
			exit();

		case 'Logout':
			session_start();
			session_unset();
			session_destroy();
			header('Location:login.php');
			break;
			exit();

		default:
			header('Location:login.php');
			break;
	}
}
else{
	header('Location:login.php');
}
?>