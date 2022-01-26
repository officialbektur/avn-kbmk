<?php
// Обновление информации о продукте
require_once '../connect/connect.php';
$id = $_POST["id"];
$newTitle = $_POST['newTitle'];
$alertnNewTitle = mysqli_query($connect, "UPDATE `allpages` SET `titles` = '$newTitle' WHERE `allpages`.`id` = $id");
// Отправляем
if ($alertnNewTitle == true) {
	$message = 'Данные изменены!';
} else {
	$message = 'Ошибка';
}
$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);