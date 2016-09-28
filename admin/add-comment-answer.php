<?php

require_once 'actions/db.php';
global $db;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add answer to comments</title>
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
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
</div>	

<div class="comment-item">

	<?php
        $comment_id = $_GET['comment-id'];
        $get_comment = mysqli_query($db, "SELECT * FROM comments WHERE id=$comment_id");
        $comment = mysqli_fetch_assoc($get_comment);
	?>

	<div class="comment-username"><?php echo $comment['user_name'] ?></div>
	<div class="comment-post-name">
		
		<?php
            $comment_post_id = $comment['post_id'];
            $get_posts = mysqli_query($db, "SELECT * FROM posts WHERE id=$comment_post_id");
            $post = mysqli_fetch_assoc($get_posts);
            echo $post['post_title'];
		?>

	</div>
	<div class="comment"><?php echo $comment['comment'] ?></div>
	<div class="comment-setting">
		<form action="actions/add-comment-answer.php" method="post">
			<input type="hidden" name="comment-id" value="<?php echo $comment_id ?>">
			<textarea name="comment-answer" placeholder="answer to this comment" cols="30" rows="10"></textarea><br>
			<input type="submit" value="Add answer">
			<a href="comments.php"><button>Return</button></a>
		</form>
	</div>
</div>

</body>
</html>