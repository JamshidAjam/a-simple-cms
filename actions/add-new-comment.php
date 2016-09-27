<!DOCTYPE html>
<html>
<head>
	<title>Adding Comment</title>
</head>
<body>
<?php

require_once '../admin/actions/db.php';
global $db;

$username = $_POST['username'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$post_id = $_POST['post-id'];
$insert_comment = mysqli_query($db, "INSERT INTO comments (user_name,user_email,comment,post_id) VALUES ('$username','$email','$comment',$post_id)");


if ($insert_comment) {
	echo "your comment added successfully" . "<br>";
	echo '<a href="../post.php?post-id=' . $post_id . '">Return ro the post</a>';
} else {
	echo "error while adding comment";
}


?>

</body>
</html>