<?php
require_once 'actions/db.php';
global $db;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="admin">
	<h2>Admin center</h2>
	<div class="top-menu">
		<ul>
			<li><a href="index.php">Main page</a></li>
			<li><a href="#">Posts</a></li>
			<li><a href="#">Categories</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
	
	<?php
	$cat_id = $_GET['cat-id'];
	$get_cat_name = mysqli_query($db, "SELECT * FROM cats WHERE id=$cat_id");
    $cat_name = mysqli_fetch_assoc($get_cat_name);
    ?>

	<div class="cat-setting">
		<form action="actions/edit-cat.php" method="post">
			<input type="hidden" name="cat-id" value="<?php echo $cat_id ?>">
			<input type="text" name="cat-name" value="<?php echo $cat_name['cat_name'] ?>" placeholder="new category name">
			<input type="submit" value="Updating category">
		</form>
	</div>


</div>	

</body>
</html>