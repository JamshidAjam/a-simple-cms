<!DOCTYPE html>
<html>
<head>
	<title>Updating post</title>
</head>
<body>

<?php

require_once 'db.php';
global $db;
$post_title = $_POST['post-title'];
$post_cat = $_POST['post-cat'];
$post_text = $_POST['post-text'];
$post_id = $_POST['post-id'];

$update_post = mysqli_query($db, "UPDATE posts SET post_title='$post_title',post_text='$post_text',post_cat=$post_cat WHERE id=$post_id");

if ($update_post) {
	header('Location: ../posts.php');
} else {
	echo "error while updating post";
}

?>


</body>
</html>