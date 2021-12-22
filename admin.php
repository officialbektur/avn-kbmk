<?php include "include/head.php"; ?>
<div class="wrapper _allpages">
	<div class="allpages _admin">
		<?php include "include/menu.php"; ?>
		<div class="allpages__content _search-location">
			<a href="admin-add.php?id=<?php echo $_GET['id']; ?>" class="allpages__block">
				<div class="allpages__title">
					Добавить тест
				</div>
			</a>
			<a href="admin-change.php?id=<?php echo $_GET['id']; ?>" class="allpages__block">
				<div class="allpages__title">
					Изменить тест
				</div>
			</a>
		</div>
	</div>
</div>
<?php include "include/script.php"; ?>
<?php include "include/end.php"; ?>