<!DOCTYPE html>
<html>
<head>
	<title>Delete Category</title>
</head>
<body>

<?php

require_once 'db.php';
global $db;

$cat_id = $_GET['cat-id'];
$delete_cat = mysqli_query($db, "DELETE FROM cats WHERE id=$cat_id");

if ($delete_cat) {
	header('Location: ../cats.php');
} else {
	echo "error while deleting category.";
}


?>

</body>
</html>