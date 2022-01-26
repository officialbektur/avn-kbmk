<!-----------------------------------  Popup Help Form Password  --Start--  ----------------------------------->
<div class="popup__form popup__info popup__help_password" id="popup_12">
	<div class="popup__form_body">
		<form class="form__password">
			<div class="form__password_content popup__body">
				<div class="back__icon close-popup _active"> 
					<span class="back__icon_icons"></span> 
				</div>
				<div class="form__password_img">
					<img src="img/user.png" alt="">
				</div>
				<input id="adminPassword" class="form__password_input _inputValide" placeholder="Пароль" required/>
				<button type="submit" id="adminPasswordButton" class="form__password_button">Отправить</button>
				<a href="contentpasswordrecovery.php" class="form__password_help">
					Забыли пароль? <span>Востановить пароль</span>
				</a>
			</div>
		</form>
		<div class="passwords__text" data-deleteaccount="<?php echo get_allpages_adminPassword(); ?>"></div>
	</div>
</div>
<!-----------------------------------  Popup Help Password  --End--  ----------------------------------->
<div class="popup__form popup__info popup__help_password" id="popup_13">
	<div class="popup__form_body">
		<div class="form__password popup__body">
			<div class="back__icon close-popup _active"> 
				<span class="back__icon_icons"></span> 
			</div>
			<div class="form__password_content">
				<div class="form__password_title">
					<span>
						Вы хотите Удалить Страницу ?
					</span>
				</div>
				<div class="form__password_content-body">
					<a href="../vendor/deleteaccount.php" type="submit" class="form__password_button menu__link_href">Удалить</a>
					<button type="submit" class="form__password_button close-popup">Отмена</button>
				</div>
			</div>
		</div>
	</div>
</div>