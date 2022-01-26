<?php
	require_once '../connect/connect.php';
	$titles = $_POST['titles'];
	$contentPasswords = $_POST['contentPasswords'];
	$adminPasswords = $_POST['adminPasswords'];
	$recoveryQuestions = $_POST['recoveryQuestions'];
	$answersToQuestions = $_POST['answersToQuestions'];
	$alert = mysqli_query($connect,"INSERT INTO `allpages` (`id`, `titles`, `contentPasswords`, `adminPasswords`, `recoveryQuestions`, `answersToQuestions`, `status`) VALUES (NULL, '$titles', '$contentPasswords', '$adminPasswords', '$recoveryQuestions', '$answersToQuestions', '')");
    if ($alert == true) {
        $message = 'Данные добавлены!';
    } else {
        $message = 'Ошибка';
    }
	$response = ['message' => $message];
    header('Content-type: application/json');
    echo json_encode($response);
?>