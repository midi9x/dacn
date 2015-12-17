<?php
	unset($_SESSION["adminlogin"]);
	header('location: '.$config["url"].'admin/index.php?controller=login');