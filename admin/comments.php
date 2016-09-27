<?php

session_start();

if(!isset($_SESSION['admin_logged_in'])) {
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html> 
<head>
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="admin">
	<h2>Admin center</h2>
	<div class="top-menu">
		<ul>
			<li><a href="index.php">Main page</a></li>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="#">Comments</a></li>
			<li><a href="cats.php">Categories</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>

	<div class="setting">
		<?php
			require_once 'actions/db.php';
			global $db;
			$get_comments = mysqli_query($db, "SELECT * FROM comments ORDER BY id DESC");
			while ($row = mysqli_fetch_assoc($get_comments)) {
		?>
		<div class="comment-item">
			<div class="comment-username"><?php echo $row['user_name'] ?></div>
			<div class="comment-post-name">
				<?php 
					$post_id = $row['post_id'] ;
					$get_posts = mysqli_query($db, "SELECT * FROM posts WHERE id=$post_id");
					$get_post = mysqli_fetch_assoc($get_posts);
					echo $get_post['post_title'];
				?>
			</div>
			<div class="comment"><?php echo $row['comment'] ?></div>
			<div class="comment-setting">
				<ul>
					<li><a href="#">confirm comments</a></li>
					<li><a href="#">add answer</a></li>
					<li><a href="#">delete comment</a></li>
				</ul>
			</div>
		</div>
		<?php
			}
		?>
	</div>

</div>	


</body>
</html>