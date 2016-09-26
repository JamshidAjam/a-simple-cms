<!DOCTYPE html>
<html>
<head>
	<title>Adding new post</title>
</head>
<body>

<?php

require_once 'db.php';
global $db;
$post_title = $_POST['post-title'];
$post_cat = $_POST['post-cat'];
$post_text = $_POST['post-text'];

$insert_post = mysqli_query($db, "INSERT INTO posts (post_title, post_cat, post_text) VALUES ('$post_title', '$post_cat', '$post_text')");

if ($insert_post) {
	header('Location: ../posts.php');
} else {
	echo "error while adding post";
}

?>

</body>
</html>