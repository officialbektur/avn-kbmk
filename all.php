<?php include "include/head.php"; ?>
<div class="wrapper _done">
	<?php include "include/popupformpassword.php"; ?>
	<!-----------------------------------  Content  --Start--  ----------------------------------->
	<section class="content _content _done">
		<?php include "include/progressbar.php"; ?>
		<?php include "include/formsearch.php"; ?>
		<!-----------------------------------  Menu  --Start--  ----------------------------------->
		<div class="menu">
			<!--------------------  Menu "Hamburger" Icon  --Start--  -------------------->
			<div class="menu__icon">
				<span></span>
			</div>
			<!--------------------  Menu "Hamburger" Icon  --End--  -------------------->
			<nav class="menu__body">
				<!--------------------  Menu list  --Start--  -------------------->
				<ul class="menu__list">
					<li><a href="info.php" class="menu__link">Главная</a></li>
					<li><a href="all.php" class="menu__link">Вся информация</a></li>
				</ul>
				<!--------------------  Menu list  --End--  -------------------->
			</nav>
		</div>
		<!-----------------------------------  Menu  --End--  ----------------------------------->
		<main class="boss">
			<div class="container">
				<div class="boss__content _search-location" id="galery">
				<?php
					$allTest = get_all();
					foreach ($allTest as $allTests):
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