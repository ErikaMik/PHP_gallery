<?php

if (isset($_POST['submit'])) {
	$target_file = "images/" . $_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
}

$images = array_diff(scandir("images"), ['..', '.']);

include 'templates/dark/dark.php';
// include 'templates/light.php';