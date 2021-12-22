<?php
	require_once '../connect/connect.php';
	$id = $_GET['id'];
	mysqli_query($connect, "UPDATE `contents` SET `all` = 'delete' WHERE `contents`.`id` = $id");
	header('Location: ../admin-change.php');
?>