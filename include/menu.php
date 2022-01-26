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
			<div class="menu__list_body">
				<li><a href="info.php" class="menu__link menu__link_href">Главная</a></li>
				<!--------------------  Dropdown list  --Start--  -------------------->
				<li class="menu__list_sublist">
					<div class="menu__list_sublist-title">
						<a class="menu__link">Редактирование</a>
						<span class="menu__arrow"></span>
					</div>
					<ul class="menu__sub_list">
						<li>
							<a href="admin-add.php" class="menu__sub_link menu__link_href">Добавить тест</a>
						</li>
						<li>
							<a href="admin-change.php" class="menu__sub_link menu__link_href">Изменить тест</a>
						</li>
						<li>
							<a href="admin-move.php" class="menu__sub_link menu__link_href">Изменить Перемещеные</a>
						</li>
					</ul>
				</li>
				<!--------------------  Dropdown list  --End--  -------------------->
				<li><a href="move.php" class="menu__link menu__link_href">Все ваши тесты</a></li>
				<li><a href="all.php" class="menu__link menu__link_href">Все тесты</a></li>
				<li><a href="cons.php" class="menu__link menu__link_href">Корзина</a></li>
				<!--------------------  Dropdown list  --Start--  -------------------->
				<li class="menu__list_sublist">
					<div class="menu__list_sublist-title">
						<a class="menu__link">Настройка</a>
						<span class="menu__arrow"></span>
					</div>
					<ul class="menu__sub_list">
						<li>
							<a href="updatetitle.php" class="menu__sub_link">Переименовать название страницы</a>
						</li>
						<li>
							<a href="updatepassword.php" class="menu__sub_link menu__link_href">Сменить пароль</a>
						</li>
						<li>
							<a href="#popup_12" class="menu__sub_link popup-link">Удалить Страницу</a>
						</li>
						<li>
							<a href="#popup_4" class="menu__sub_link popup-link">Выход</a>
						</li>
					</ul>
				</li>
				<!--------------------  Dropdown list  --End--  -------------------->
			</div>
		</ul>
		<!--------------------  Menu list  --End--  -------------------->
	</nav>
	<?php include "include/popup-deleteaccount.php"; ?>
	<?php include "include/popup-back.php"; ?>
</div>
<!-----------------------------------  Menu  --End--  ----------------------------------->