<?php
	require_once '../connect/connect.php';
	$id = $_GET['id'];
	mysqli_query($connect, "UPDATE `allpages` SET `status` = 'delete' WHERE `allpages`.`id` = $id");
	header('Location: ../index.php');
?>