<?php

session_start();

if(!isset($_SESSION['admin_logged_in'])) {
	header('Location: index.php');
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
	<div class="top-menu">
		<ul>
			<li><a href="#">Main page</a></li>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="cats.php">Categories</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
</div>	


</body>
</html>