<?php
	require_once '../connect/connect.php';
	$idContent = $_POST["id"];
	$questionText = $_POST['question-text'];
	$answerText = $_POST['answer-text'];
	$image1 = $_FILES["image1"];
	$image2 = $_FILES["image2"];
	if (!is_dir(filename: '../dbimg')) {
		mkdir(directory: '../dbimg', permissions: 0777, recursive: true);
	}
	$extension1 = pathinfo($image1["name"], flags: PATHINFO_EXTENSION);
	$extension2 = pathinfo($image2["name"], flags: PATHINFO_EXTENSION);
	$fileName1 = md5($image1["name"]. time()) . ".". $extension1;
	$fileName2 = md5($image2["name"]. time()) . ".". $extension2;
	move_uploaded_file($image1['tmp_name'], "../dbimg/" . $fileName1);
	move_uploaded_file($image2['tmp_name'], "../dbimg/" . $fileName2);
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
	$alert = mysqli_query($connect,"INSERT INTO `contents` (`id`, `question-text`, `question-img`, `question-img-image`, `question-img-link`, `answer-text`, `answer-img`, `answer-img-image`, `answer-img-link`, `category`, `all`) VALUES (NULL, '$questionText', '$nameImage1', '$nameImage1Img', '$nameImage1Link', '$answerText', '$nameImage2', '$nameImage2Img', '$nameImage2Link', '$idContent', 'all')");
	if ($alert == false) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }
	$response = ['message' => $message];
    header('Content-type: application/json');
    echo json_encode($response);
?>