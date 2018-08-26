<?php
	session_start();
	session_destroy();
	header("Location: ../user/index.php")
?>