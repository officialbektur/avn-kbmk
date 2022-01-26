<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/adminpopupformpassword.php"; ?>
	<div class="allpages _admin _content _done">
		<div class="popup__form popup__info popup__help_password _updatepassword" id="popup_newcontentpassword">
			<div class="popup__form_body popup__body">
				<form class="form__password" id="form">
					<div class="form__password_content">
						<div class="form__password_title">
							<span>
								Придумайте новый пароль и запомните его (на Лат.).
							</span>
						</div>
						<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
						<input id="recoveryQuestions" name="recoveryQuestions" class="form__password_input _req _inputValide" placeholder="Новый пароль"/>
						<button type="submit" id="recoveryQuestionsButton" class="form__password_button">Изменить</button>
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