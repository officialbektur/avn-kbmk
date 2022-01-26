<?php
	require_once '../connect/connect.php';
	$idContent = $_POST["id"];
	$trueClassActiveInClassFilePrewiew1 = $_POST["trueClassActiveInClassFilePrewiew1"];
	$trueClassActiveInClassFilePrewiew2 = $_POST["trueClassActiveInClassFilePrewiew2"];
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
	if ($trueClassActiveInClassFilePrewiew1 == "false"  && $trueClassActiveInClassFilePrewiew2 == "true" && $nameImage1 == "" && $nameImage2 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText', `question-img` = '$nameImage1', `question-img-image`= '$nameImage1Img', `question-img-link` = '$nameImage1Link', `answer-text` = '$answerText' WHERE `contents`.`id` = '$idContent'");
	} else if ($trueClassActiveInClassFilePrewiew1 == "true"  && $trueClassActiveInClassFilePrewiew2 == "false" && $nameImage1 == "" && $nameImage2 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText',`answer-text` = '$answerText', `answer-img` = '$nameImage2', `answer-img-image` = '$nameImage2Img', `answer-img-link` = '$nameImage2Link' WHERE `contents`.`id` = '$idContent'");
	} else if ($trueClassActiveInClassFilePrewiew1 == "false" && $trueClassActiveInClassFilePrewiew2 == "false" && $nameImage1 == "" && $nameImage2 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText', `question-img` = '$nameImage1', `question-img-image`= '$nameImage1Img', `question-img-link` = '$nameImage1Link', `answer-text` = '$answerText', `answer-img` = '$nameImage2', `answer-img-image` = '$nameImage2Img', `answer-img-link` = '$nameImage2Link' WHERE `contents`.`id` = '$idContent'");
	} else if (!$nameImage1 == "" && $nameImage2 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText', `question-img` = '$nameImage1', `question-img-image`= '$nameImage1Img', `question-img-link` = '$nameImage1Link', `answer-text` = '$answerText' WHERE `contents`.`id` = '$idContent'");
	} else if (!$nameImage2 == "" && $nameImage1 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText',`answer-text` = '$answerText', `answer-img` = '$nameImage2', `answer-img-image` = '$nameImage2Img', `answer-img-link` = '$nameImage2Link' WHERE `contents`.`id` = '$idContent'");
	} else if (!$nameImage1 == "" && !$nameImage2 == "") {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText', `question-img` = '$nameImage1', `question-img-image`= '$nameImage1Img', `question-img-link` = '$nameImage1Link', `answer-text` = '$answerText', `answer-img` = '$nameImage2', `answer-img-image` = '$nameImage2Img', `answer-img-link` = '$nameImage2Link' WHERE `contents`.`id` = '$idContent'");
	} else {
		$alert = mysqli_query($connect,"UPDATE `contents` SET `question-text` = '$questionText',`answer-text` = '$answerText' WHERE `contents`.`id` = '$idContent'");
	}
	if ($alert == true) {
		$message = 'Данные Изменены!';
    } else {
		$message = 'Ошибка';
    }
	$response = ['message' => $message];
    header('Content-type: application/json');
    echo json_encode($response);
?>