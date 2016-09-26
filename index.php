<?php

require_once 'admin/actions/db.php';
global $db;


?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo constant('MY_BLOG_NAME') ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="container">

	<h1><?php echo constant('MY_BLOG_NAME') ?></h1>

	<div class="content">a</div>
	<div class="sidebar">
		<h3>Categories</h3>
		<ul>
			<?php

				$get_cats = mysqli_query($db, "SELECT * FROM cats");
				while ($row = mysqli_fetch_assoc($get_cats)) {
					?>
			<li><?php echo $row['cat_name'] ?></li>
					<?php
				}

			?>
		</ul>
	</div>
</div>

</body>
</html>