<?php
	$idContent = get_allpages_content();
	foreach ($idContent as $idContents):
?>
<div class="boss__column">
	<div class="boss__text">
		<div class="boss__text_question">
			<span class="boss__text_numer"></span> 
			<span class="boss__text_question-text">
				<?php echo $idContents["question-text"]; ?>
			</span>
		</div>
		<div class="boss__text_question-img">
			<?php echo $idContents["question-img"]; ?>
		</div>
		<div class="boss__text_answertext">Ответ:</div>
		<div class="boss__text_answer">
			<?php echo $idContents["answer-text"] ?>
			<div class="boss__text_answer-img">
				<?php echo $idContents["answer-img"]; ?>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>