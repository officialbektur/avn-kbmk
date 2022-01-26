<?php
	require_once "../connect/connect.php";
	if (isset($_POST['form__checkbox_button-delete'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'delete' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /admin-change.php");
	} else if (isset($_POST['form__checkbox_button-deletepermanently'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = ("DELETE FROM `contents` WHERE `contents`.`id` =".$updateid);
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /cons.php");
	} else if (isset($_POST['form__checkbox_button-move-delete'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'delete' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /admin-move.php");
	} else if (isset($_POST['form__checkbox_button-move'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'allCon' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /admin-change.php");
	} else if (isset($_POST['form__checkbox_button-movepermanently'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'allCon' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /cons.php");
	} else if (isset($_POST['form__checkbox_button-recovery'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'all' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /cons.php");
	} else if (isset($_POST['form__checkbox_button-move-recovery'])) {
		if(isset($_POST['update'])){
			foreach($_POST['update'] as $updateid) {
				$updateUser = "UPDATE `contents` SET `all` = 'all' WHERE id=".$updateid;
				mysqli_query($connect,$updateUser);
			}
		}
		header("Location: /admin-move.php");
	} else {
		header("Location: /info.php");
	}
?>