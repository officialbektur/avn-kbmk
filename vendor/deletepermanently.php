<?php
	require_once '../connect/connect.php';
	$id = $_GET['id'];
	mysqli_query($connect, "DELETE FROM `contents` WHERE `contents`.`id` = $id");
	header('Location: ../cons.php');
?>