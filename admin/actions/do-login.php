<?php

require_once 'db.php';
global $db;

$username = $_POST['username'];
$password = md5($_POST['password']);

$check_admin = mysqli_query($db, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");

if (mysqli_num_rows($check_admin) > 0) {
	session_start();
	$_SESSION[admin_logged_in] = 1;
	header('Location: ../admin.php');
} else {
	echo "Username or password wasen't correct!";
}


?>