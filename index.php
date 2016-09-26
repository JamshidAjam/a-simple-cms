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

	<div class="content">
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="post">
			<div class="post-title">leaen php &amp; mysql</div>
			<div class="post-cat">categories: learning</div>
			<div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</div>
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