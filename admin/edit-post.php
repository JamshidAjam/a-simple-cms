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
	<title>Edit posts</title>
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

	<?php

	$post_id = $_GET['post-id'];
	$get_post = mysqli_query($db, "SELECT * FROM posts WHERE id=$post_id");
	$get_post_info = mysqli_fetch_assoc($get_post);
	?>

	<div class="post">
		<form action="actions/edit-post.php" method="post">
		<input type="hidden" name="post-id" value="<?php echo $post_id ?>">
			<input type="text" name="post-title" value="<?php echo $get_post_info['post_title'] ?>" placeholder="enter the post"><br>
			<select name="post-cat">
			<option value="<?php echo $get_post_info['post_cat'] ?>"><?php echo $get_post_info['post_cat'] ?></option>
				<?php
					$get_cats = mysqli_query($db, "SELECT * FROM cats");
					while ($row = mysqli_fetch_assoc($get_cats)) {
						?>
							<option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> - <?php echo $row['cat_name'] ?></option>
						<?php
					}
				?>

				<?php

				?>
			</select>
			<br>
			<textarea name="post-text" cols="30" rows="10" placeholder="enter text"><?php echo $get_post_info['post_text'] ?></textarea><br>
			<input type="submit" name="" value="Update">
		</form>
	</div>


</div>	


</body>
</html>