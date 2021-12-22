<!-----------------------------------  Popup Form Password  --Start--  ----------------------------------->
<div class="popup__form popup__password">
	<div class="popup__form_body">
		<form class="form__password">
			<div class="form__password_content">
				<div class="form__password_img">
					<img src="img/user.png" alt="">
				</div>
				<input id="form__input" class="form__password_input" placeholder="Админ Пароль" required/>
				<input type="submit" class="form__password_button" value="Войти"/>
				<a href="adminpasswordrecovery.php" class="form__password_help">
					Забыли пароль? <span>Востановить пароль</span>
				</a>
			</div>
		</form>
		<div class="passwords__text" data-adminpass="<?php echo get_allpages_adminPassword(); ?>"></div>
	</div>
</div>
<!-----------------------------------  Popup Form Password  --End--  ----------------------------------->