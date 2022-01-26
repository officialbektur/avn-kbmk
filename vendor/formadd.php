<?php
	require_once '../connect/connect.php';
	$idContent = $_POST["id"];
	$questionText = $_POST['question-text'];
	$answerText = $_POST['answer-text'];
	if (!is_dir('../dbimg')) {
		mkdir('../dbimg', 0777, true);
	}
	if($_FILES["image1"]) {
		$image1 = $_FILES["image1"];
		$image2 = $_FILES["image2"];
		if ($image1["name"]) {
			$extension1 = pathinfo($image1["name"], PATHINFO_EXTENSION);
			$fileName1 = md5($image1["name"] . "qwertyuiopasqwertyuiopasdfghjklzxcvcxewet5412345677890bnmdfghjklzxcvcxewet5412345677890bnm" . time()) . ".$extension1";
			move_uploaded_file($image1['tmp_name'], "../dbimg/" . $fileName1);
		}
		if ($image2["name"]) {
			$extension2 = pathinfo($image2["name"], PATHINFO_EXTENSION);
			$fileName2 = md5($image2["name"] . "qwertyuiopasqwertyuiopasdfghjklzxcvcxewet5412345677890bnmdfghjklzxcvcxewet5412345677890bnm" . time()) . ".$extension2";
			move_uploaded_file($image2['tmp_name'], "../dbimg/" . $fileName2);
		}
	}
	$nameImage1 = "";
	$nameImage1Img = "";
	$nameImage1Link = "";
	$nameImage2 = "";
	$nameImage2Img = "";
	$nameImage2Link = "";
	if ($image1["name"]) {
		$nameImage1 = "<a href=\"" . "dbimg/" . "$fileName1\"" . " " . "data-fancybox=\"gallery\"><img src=\"" . "dbimg/" . "$fileName1\"" . " " . "alt=\"img\"></a>";
		$nameImage1Img = "<img src=\"" . "dbimg/" . "$fileName1\"" . " " . "alt=\"img\">";
		$nameImage1Link= "$fileName1";
	}
	if ($image2["name"]) {
		$nameImage2 = "<a href=\"" . "dbimg/" . "$fileName2\"" . " " . "data-fancybox=\"gallery\"><img src=\"" . "dbimg/" . "$fileName2\"" . " " . "alt=\"img\"></a>";
		$nameImage2Img = "<img src=\"" . "dbimg/" . "$fileName2\"" . " " . "alt=\"img\">";
		$nameImage2Link = "$fileName2";
	} 
	$dateadd = date('Y-m-d H:i:s');
	$alert = mysqli_query($connect,"INSERT INTO `contents` (`id`, `question-text`, `question-img`, `question-img-image`, `question-img-link`, `answer-text`, `answer-img`, `answer-img-image`, `answer-img-link`, `category`, `dateadd`, `all`) VALUES (NULL, '$questionText', '$nameImage1', '$nameImage1Img', '$nameImage1Link', '$answerText', '$nameImage2', '$nameImage2Img', '$nameImage2Link', '$idContent', '$dateadd', 'all')");
	if ($alert == true) {
		$message = 'Данные добавлены!';
    } else {
        $message = 'Ошибка';
    }
	$response = ['message' => $message];
	header('Content-type: application/json');
	echo json_encode($response);
?>