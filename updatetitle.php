<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/adminpopupformpassword.php"; ?>
	<div class="allpages _admin _content _done">
		<div class="popup__form popup__info popup__help_password _updatepassword" id="form__newtitle">
			<div class="popup__form_body popup__body">
				<form class="form__password" id="form">
					<div class="form__password_content">
						<div class="form__password_title">
							<span>
								<?php
									function get_allpages_allTitle() {
										global $connect;
										$idContent = $_GET['id'];
										$titles = $connect->query("SELECT * FROM `allpages` WHERE `id` = '$idContent'");
										foreach ($titles as $titles) {
											return $titles["titles"];
										}
									}
								?>
								Текущая названия: <?php echo get_allpages_allTitle(); ?>
							</span>
							<span>
								Новое название страницы (на Лат.):
							</span>
						</div>
						<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
						<input name="newTitle" class="form__password_input _req _inputValide" placeholder="Название страницы"/>
						<button type="submit" class="form__password_button">Изменить</button>
					</div>
				</form>
				<div class="alert__messege">
					<div class="alert__messege_text">
						Messege
					</div>
					Нажмите по экрану, чтобы закрыть.
				</div>
			</div>
		</div>
	</div>
	<div class="_menu__icon_white _updatepassword_newcontentpassword">
		<?php include "include/menu.php"; ?>
	</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>