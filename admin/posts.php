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
	<title>Blog Posts</title>
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
		<div style="padding-top:10px">
			<a href="add-new-post.php">add new post</a>
		</div>

	<table>
		<tr>
			<td>Post Name</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		<?php

		$get_posts = mysqli_query($db, "SELECT * FROM posts");
		while ($row = mysqli_fetch_assoc($get_posts)) {
			?>
				
				<tr>
					<td><?php echo $row['post_title'] ?></td>
					<td><a href="edit-post.php?post-id=<?php echo $row['id'] ?>">edit</a></td>
					<td><a href="actions/delete-post.php?post-id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">delete</a></td>
				</tr>
	
			<?php
		}

		?>
	</table>
	

</div>	


</body>
</html>