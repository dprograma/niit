<?php
require('config.php');


$result = mysqli_query("SELECT * FROM usertable");

echo "<table cellspacing='2' cellpadding='18' border='1'>";
echo "<tr><td>ID</td><td>FIRSTNAME</td><td>LASTNAME</td><td>GENDER</td><td>PASSWORD</td><td>EMAIL</td><td>PHONE</td><td>ADDRESS</td><td>STATE</td><td>IMAGE</td><td>DATE</td></tr>";

while ($row = mysqli_fetch_array($conn,$result)) {
	echo "<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['password'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['address'] . "</td><td>" . $row['state'] . "</td><td>" . $row['image'] . "</td><td>" . $row['dateadded'] . "</td></tr>";
}
echo "</table";
?>