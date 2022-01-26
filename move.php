<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/popupformpassword.php"; ?>
	<?php include "include/menu.php"; ?>
	<!-----------------------------------  Content  --Start--  ----------------------------------->
	<section class="content _content _done">
		<?php include "include/progressbar.php"; ?>
		<?php include "include/formsearch.php"; ?>
		<main class="boss">
			<div class="container">
				<div class="boss__content _search-location" id="galery">
				<?php
					$idContent = get_allpages_allcontent();
					foreach ($idContent as $idContents):
				?>
				<div class="boss__column">
					<div class="boss__text">
						<div class="boss__text_question">
							<span class="boss__text_numer"></span> 
							<span class="boss__text_question-text">
								<?php echo $idContents["question-text"] ?>
							</span>
						</div>
						<div class="boss__text_question-img">
							<a href="<?php echo $idContents["question-img-link"]; ?>" data-fancybox="gallery">
								<?php echo $idContents["question-img"]; ?>
							</a>
						</div>
						<div class="boss__text_answertext">Ответ:</div>
						<div class="boss__text_answer">
							<?php echo $idContents["answer-text"] ?>
							<div class="boss__text_answer-img">
								<a href="<?php echo $idContents["answer-img-link"]; ?>" data-fancybox="gallery">
									<?php echo $idContents["answer-img"]; ?>
								</a>
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