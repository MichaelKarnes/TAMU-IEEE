<?php
$db = mysqli_connect("localhost", "km310765_admin", "Aftermath2015", "km310765_f2foxes") or die("Didn't work");
$query = $db->query("INSERT INTO `admins` (`id`, `username`, `password`) VALUES ('".md5(uniqid(mt_rand(), true))."', 'ieeetamu', 'newITofficer14');");
?>
