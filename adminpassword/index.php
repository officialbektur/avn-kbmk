<?php
    require_once '../config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `passwords` WHERE `id` = '1'");
    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!-- -----------------------  SHORTCUT ICON  ----------------------- -->
	<link rel="shortcut icon" href="img/shortcuticons/icon.jpg" type="image/x-icon">
	<!-- Адаптив для моб -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Изменить Пароль</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="passwords__body">
        <form class="passwords__form" action="update.php" method="post">
            <div class="passwords__content">
                <div class="passwords__form_title">Изменить Пароль</div>
                <div class="passwords__form_title">Данный пароль: <span><?=$product['password']?></span></div>
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <input class="passwords__form_input" type="text" name="password" placeholder="Изменить Пароль" required/>
                <input type="submit" type="submit" class="passwords__form_button" value="ОТПРАВИТЬ"/>
            </div>
        </form>
    </div>
</body>
</html>