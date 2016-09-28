<?php

require_once 'actions/db.php';
global $db;

session_start();

if(!isset($_SESSION['admin_logged_in'])) {
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html> 
<head>
	<title>Adding new post</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="admin">
	<h2>Admin center</h2>
	<div class="top-menu">
		<ul>
			<li><a href="index.php">Main page</a></li>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="comments.php">Comments</a></li>
			<li><a href="cats.php">Categories</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</div>

	<div class="post">
		<form action="actions/add-new-post.php" method="post">
			<input type="text" name="post-title" placeholder="enter the post"><br>
			<select name="post-cat">
			<option value="0">choose a category</option>
				<?php
					$get_cats = mysqli_query($db, "SELECT * FROM cats");
					while ($row = mysqli_fetch_assoc($get_cats)) {
						?>
							<option value="<?php echo $row['id'] ?>"><?php echo $row['cat_name']?></option>
						<?php
					}
				?>

				<?php

				?>
			</select>
			<br>
			<textarea name="post-text" cols="30" rows="10" placeholder="enter text"></textarea><br>
			<input type="submit" name="" value="ADD">
		</form>
	</div>


</div>	


</body>
</html>