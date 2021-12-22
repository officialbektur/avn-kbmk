<?php include "include/head.php"; ?>
<div class="wrapper _done">
<!-----------------------------------  Popup Help Form Password  --Start--  ----------------------------------->
<div class="popup__form popup__info popup__help_password" id="popup_1">
	<div class="popup__form_body popup__body">
		<form class="form__password">
			<div class="form__password_content">
				<div class="form__password_title">
					<span>ВОРОС:</span>
					<span>
						<?php echo get_allpages_recoveryQuestions(); ?>
					</span>
				</div>
				<input id="recoveryQuestions" class="form__password_input _req" placeholder="Ответ"/>
				<input id="recoveryQuestionsButton" type="submit" class="form__password_button" value="Войти"/>
			</div>
		</form>
		<div class="passwords__text" data-recovery="<?php echo get_allpages_answersToQuestions(); ?>"></div>
	</div>
</div>
<div class="popup__form popup__info popup__help_password" id="popup_newadminpassword">
	<div class="popup__form_body popup__body">
		<form class="form__password" id="form">
			<div class="back__icon close-popup _active"> 
				<span class="back__icon_icons"></span> 
			</div>
			<div class="form__password_content">
				<div class="form__password_title">
					<span>
						Придумайте новый пароль и запомните его.
					</span>
				</div>
				<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
				<input id="recoveryQuestions" name="adminPasswords" class="form__password_input _req" placeholder="Новый пароль"/>
				<input id="recoveryQuestionsButton" type="submit" class="form__password_button" value="Войти"/>
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
<!-----------------------------------  Popup Help Password  --End--  ----------------------------------->
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>