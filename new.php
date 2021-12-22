<?php include "include/head.php"; ?>
<div class="wrapper _done">
		<!-----------------------------------  Popup Form Password  --Start--  ----------------------------------->
		<div class="popup__form">
          	<div class="popup__form_body">
				<form class="form__new form-new" id="form">
					<div class="form__new_content">
						<div class="form__new_title">Создание страницы</div>
						<div class="form__new_item">
							<label for="form__input_name" class="form__new_label"><span>Название страницы:</span></label>
							<div class="form__input_name-text"></div>
							<input id="form__input_name" class="form__new_input _req" name="titles" placeholder="Название" minlength="2">
						</div>
						<div class="form__new_item">
							<label for="form__input_password1" class="form__new_label"><span>Пароль для гланой страницы:</span></label>
							<input id="form__input_password1" class="form__new_input _req" name="contentPasswords" placeholder="Пароль">
						</div>
						<div class="form__new_item">
							<label for="form__input_password2" class="form__new_label"><span>Админ пароль:</span></label><span class="form__new_label-button _adminPasswords">(Зачем?)</span>
							<input id="form__input_password2" class="form__new_input _req" name="adminPasswords" placeholder="Админ пароль">
						</div>
						<div class="form__new_title">Для безопасности</div>
						<div class="form__new_item">
							<label for="form__input" class="form__new_label"><span>Вопрос для востановление пароля:</span></label>
							<input id="form__input" class="form__new_input _req" name="recoveryQuestions" placeholder="Придумайте вопрос">
						</div>
						<div class="form__new_item">
							<label for="form__input" class="form__new_label"><span>Ответ на ваш вопрос:</span></label>
							<input id="form__input" class="form__new_input _req" name="answersToQuestions" placeholder="Напишите ответ">
						</div>
						<button type="submit" class="form__new_button">
							Войти
						</button>
					</div>
					<div class="alert__messege">
						<div class="alert__messege_text">
							Messege
						</div>
						Нажмите по экрану, чтобы закрыть.
					</div>
					<div class="alert__popup">
						<div class="alert__popup_text">
						</div>
						Нажмите по экрану, чтобы закрыть.
					</div>
					<div style="display: none;" id="allpagesTitles">
						<?php
							// $allpage = get_allpages_by_title();
							// foreach ($allpage as $allpage):
						?>
						<span class="allpagesTitles">aaa</span>
						<span class="allpagesTitles">bbb</span>
						<span class="allpagesTitles">ccc</span>
						<span class="allpagesTitles">ddd</span>
						<?php //endforeach;?>
					</div>
				</form>
		   	</div>
        </div>
		<!-----------------------------------  Popup Form Password  --End--  ----------------------------------->
	</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>