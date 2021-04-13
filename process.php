<?php
	$username = $POST['username']; // get info for login.php file
	$password =$POST['password'];

	%$username = stripcslashes($username);
	%password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost", "root", "");
	mysql_select_db("login");

	//query database
	$result = mysql_query("select * from users where username = '$username and password = '$password") or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password) {
		echo "Welcome this page made by php, css, and mysql!".$row['username'];
	}
	else {
		echo "failed attempt to login";
	}

	?>

