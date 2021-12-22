<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/adminpopupformpassword.php"; ?>
	<!-----------------------------------  Content  --Start--  ----------------------------------->
	<section class="content _content _done">
		<?php include "include/progressbar.php"; ?>
		<?php include "include/formsearch.php"; ?>
		<?php include "include/menu.php"; ?>
		<main class="boss">
			<div class="container">
				<div class="boss__content _search-location">
				<?php
					$idContent = get_allpages_con();
					foreach ($idContent as $idContents):
				?>
				<div class="boss__column">
					<div class="boss__text">
						<a style="color: red;" href="vendor/consrecovery.php?id=<?php echo $idContents["id"]?>">Востановить</a>
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
		</main>
	</section>
	<!-----------------------------------  Content  --End--  ----------------------------------->
	<?php include "include/upbutton.php"; ?>
</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>