<?php
// Обновление информации о продукте
require_once '../connect/connect.php';
$id = $_POST["id"];
$recoveryQuestions = $_POST['recoveryQuestions'];
$alertRecoveryQuestions = mysqli_query($connect, "UPDATE `allpages` SET `contentPasswords` = '$recoveryQuestions' WHERE `allpages`.`id` = $id");
// Отправляем
if ($alertRecoveryQuestions == true) {
	$message = 'Данные изменены!';
} else {
	$message = 'Ошибка';
}
$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);