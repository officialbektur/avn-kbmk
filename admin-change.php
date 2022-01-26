<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/adminpopupformpassword.php"; ?>
	<!-----------------------------------  Content  --Start--  ----------------------------------->
	<section class="content _content _done">
		<?php include "include/progressbar.php"; ?>
		<?php include "include/formsearch.php"; ?>
		<main class="boss">
			<form action="vendor/checkbox_deleteormove_all.php" method="POST" class="form__deleteormove_all">
				<div class="formpanel">
					<div class="formpanel__content">
						<a href="#popup_5" class="popup-link" class="formpanel__column">
							<button type="submit" class="form__checkbox_button form__checkbox_button-delte">Удалить/Переместить</button>
						</a>
						<div class="formpanel__column">
							<input id="checkAll" type="checkbox" class="boss__text_checkbox-input">
							<div class="boss__text_checkbox-button"></div>
							<label for="checkAll">Выделить все</label>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="boss__content _search-location">
					<?php
						$idContent = get_allpages_content();
						foreach ($idContent as $idContents):
					?>
					<div class="boss__column">
						<div class="boss__text">
							<div class="boss__text_setting">
								<a href="#popup_2" class="popup-link" data-deleteormove="<?php echo $idContents["id"]?>">Удалить или Переместить</a>
								<a href="popup-change.php?id=<?php echo $idContents["id"]?>">Изменить</a>
								<div class="boss__text_checkbox">
									<input id="formAgreement" type="checkbox" name="update[]" class="boss__text_checkbox-input" value="<?php echo $idContents['id'];?>">
									<div class="boss__text_checkbox-button"></div>
								</div>
							</div>
							<div class="boss__text_question">
								<span class="boss__text_numer"></span> 
								<span class="boss__text_question-text">
									<?php echo $idContents["question-text"] ?>
								</span>
							</div>
							<div class="boss__text_question-img">
								<?php echo $idContents["question-img"] ?>
							</div>
							<div class="boss__text_answertext">Ответ:</div>
							<div class="boss__text_answer">
								<?php echo $idContents["answer-text"] ?>
								<div class="boss__text_answer-img">
									<?php echo $idContents["answer-img"] ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					</div>
				</div>
				<?php include "include/admin-alert-alldeleteormove.php"; ?>
				<div class="alert__messege">
					<div class="alert__messege_text">
						Messege
					</div>
					Нажмите по экрану, чтобы закрыть.
				</div>
			</form>
		</main>
	</section>
	<!-----------------------------------  Content  --End--  ----------------------------------->
	<?php include "include/admin-alert-deleteormove.php"; ?>
	<?php include "include/menu.php"; ?>
	<?php include "include/upbutton.php"; ?>
</div>
<?php include "include/script.php"; ?>
<script type="text/javascript">
	$(document).ready(function(){
		// Check/Uncheck ALl
		$('#checkAll').change(function(){
			if($(this).is(':checked')){
				$('input[name="update[]"]').prop('checked',true);
			}else{
				$('input[name="update[]"]').each(function(){
					$(this).prop('checked',false);
				}); 
			}
		});
		// Checkbox click
		$('input[name="update[]"]').click(function(){
			var total_checkboxes = $('input[name="update[]"]').length;
			var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

			if(total_checkboxes_checked == total_checkboxes){
				$('#checkAll').prop('checked',true);
			}else{
				$('#checkAll').prop('checked',false);
			}
		});
	});
</script>
<?php include "include/end.php"; ?>