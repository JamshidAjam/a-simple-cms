<?php
require_once 'actions/db.php';
global $db;
?>
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
	<div class="cat-setting">
		<form action="actions/add-new-cat.php" method="post">
			<input type="text" name="cat-name" placeholder="new category name">
			<input type="submit" value="Add new category">
		</form>
	</div>

	<table>
		<tr>
			<td>NAME</td>
			<td>EDIT</td>
			<td>DELETE</td>
		</tr>
		<?php
			$get_cats = mysqli_query($db, "SELECT * FROM cats");
			while($row = mysqli_fetch_assoc($get_cats)) {
				?>

					<tr>
						<td><?php echo $row['cat_name'] ?></td>
						<td><a href="edit-cat.php?cat-id=<?php echo $row['id'] ?>">edit</a></td>
						<td><a href="actions/cat-delete.php?cat-id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">delete</a></td>
					</tr>

				<?php
			}
		?>
	</table>

</div>	


</body>
</html>