<?php

session_start();

if(isset($_SESSION['admin_logged_in'])) {
	echo "session was created.";
} else {
	echo "there is no session!";
}

?>