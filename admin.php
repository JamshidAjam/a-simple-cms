<?php

session_start();

if(!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
}

?>

<!DOCTYPE html>
<html> 
<head>
	<title>Management Center</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="admin">
	<h2>Admin center</h2>
</div>	


</body>
</html>