<?php include "include/head.php"; ?>
<div class="wrapper _done">
		<?php include "include/adminpopupformpassword.php"; ?>
		<!-----------------------------------  Popup Form Password  --Start--  ----------------------------------->
		<div class="popup__form _content _done">
          	<div class="popup__form_body">
				<form class="form__new form-add" id="form" enctype="multipart/form-data">
					<div class="form__new_content" >
						<div class="form__new_title">Добавить тест</div>
						<div class="form__new_item">
							<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
							<label for="form__input_name1" class="form__new_label"><span>Какой Вопрос:</span></label>
							<textarea id="form__input_name1" name="question-text" class="form__new_textarea form__new_input _req" placeholder="Вопрос"></textarea>
							<div class="form__item form__file">
								<label for="formImageInput1" class="file__label">Добавить изображ.</label>
								<div class="file">
									<div class="file__item">
										<input id="formImageInput1" accept=".jpg, .png, .gif" type="file" name="image1" class="file__input">
										<div class="file__button">Выбрать</div>
									</div>
									<div class="file__prewiew file__prewiew-1">
										<div id="formPreviewImg1" class="file__prewiew_img"></div>
										<div class="file__prewiew_back file__prewiew_back-1">
											Отмена
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form__new_item">
							<label for="form__input_name2" class="form__new_label"><span>Ответ:</span></label>
							<textarea id="form__input_name2" name="answer-text" class="form__new_textarea form__new_input _req" placeholder="Ответ"></textarea>
							<div class="form__item form__file">
								<label for="formImageInput2" class="file__label">Добавить изображ.</label>
								<div class="file">
									<div class="file__item">
										<input id="formImageInput2" accept=".jpg, .png, .gif" type="file" name="image2" class="file__input">
										<div class="file__button">Выбрать</div>
									</div>
									<div class="file__prewiew file__prewiew-2">
										<div id="formPreviewImg2" class="file__prewiew_img"></div>
										<div class="file__prewiew_back file__prewiew_back-2">
											Отмена
										</div>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="form__new_button">
							Отправить
						</button>
					</div>
					<div class="alert__messege">
						<div class="alert__messege_text">
							Messege
						</div>
						Нажмите по экрану, чтобы закрыть.
					</div>
				</form>
		   	</div>
        </div>
		<!-----------------------------------  Popup Form Password  --End--  ----------------------------------->
		<div class="_menu__icon_white _updatepassword_newcontentpassword">
			<?php include "include/menu.php"; ?>
		</div>
</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>