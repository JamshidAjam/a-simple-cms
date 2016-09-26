<!DOCTYPE html>
<html> 
<head>
	<title>Categories</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="admin">
	<h2>Admin center</h2>
	<div class="top-menu">
		<ul>
			<li><a href="admin.php">Main page</a></li>
			<li><a href="#">Posts</a></li>
			<li><a href="#">Categories</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
	<div class="add-cat">
		<form action="actions/add-new-cat.php" method="post">
			<input type="text" name="cat-name" placeholder="new category name">
			<input type="submit" value="Add new category">
		</form>
	</div>
</div>	


</body>
</html>