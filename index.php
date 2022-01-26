<?php include "include/head.php"; ?>
<?php include "include/progressbar.php"; ?>
<div class="wrapper _allpages">
	<div class="allpages">
		<?php include "include/formsearch.php"; ?>
		<div class="allpages__content _search-location">
			<a href="new.php" class="allpages__block new__block">
				<div class="allpages__title">
					Создать страницу<span>+</span>
				</div>
			</a>
			<a href="all.php" class="allpages__block">
				<div class="allpages__title">
					Все тесты
				</div>
				<div class="allpages__id">
					ID0
				</div>
			</a>
			<?php
				$allpages = get_allpages_all();
				foreach ($allpages as $allpage):
			?>
			<a href="info.php?id=<?php echo $allpage["id"]?>" class="allpages__block">
				<div class="allpages__title">
					<?php echo $allpage["titles"]?>
				</div>
				<div class="allpages__id">
					ID<?php echo $allpage["id"]?>
				</div>
			</a>
			<?php
				endforeach;
			?>
		</div>
	</div>
	<?php include "include/upbutton.php"; ?>
</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>