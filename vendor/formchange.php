<?php
require_once '../connect/connect.php';
mysqli_query($connect, "DELETE FROM `contents` WHERE `contents`.`id` = '$id'");
header('Location: /admin.php');