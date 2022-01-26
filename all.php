<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/menu.php"; ?>
	<!-----------------------------------  Content  --Start--  ----------------------------------->
	<section class="content">
		<?php include "include/progressbar.php"; ?>
		<?php include "include/formsearch.php"; ?>
		<main class="boss">
			<div class="container">
				<div class="boss__content _search-location" id="galery">
				<?php
					$allTest = get_all();
					if ($_GET['id'] == 1) {
						$allTest = get_all_vip();
					}
					foreach ($allTest as $allTests) {
				?>
				<div class="boss__column">
					<div class="boss__text">
						<div class="boss__text_question">
							<span class="boss__text_numer"></span> 
							<span class="boss__text_question-text">
								<?php echo $allTests["question-text"] ?>
							</span>
						</div>
						<div class="boss__text_question-img">
							<a href="<?php echo $allTests["question-img-link"]; ?>" data-fancybox="gallery">
								<?php echo $allTests["question-img"]; ?>
							</a>
						</div>
						<div class="boss__text_answertext">Ответ:</div>
						<div class="boss__text_answer">
							<?php echo $allTests["answer-text"] ?>
							<div class="boss__text_answer-img">
								<a href="<?php echo $allTests["answer-img-link"]; ?>" data-fancybox="gallery">
									<?php echo $allTests["answer-img"]; ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				?>
				</div>
			</div>
		</main>
	</section>
	<!-----------------------------------  Content  --End--  ----------------------------------->
	<?php include "include/upbutton.php"; ?>
</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>