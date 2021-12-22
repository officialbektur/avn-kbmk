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
			<li><a href="info.php?id=<?php echo $_GET['id'];?>" class="menu__link">Главная</a></li>
			<li><a href="admin.php?id=<?php echo $_GET['id'];?>" class="menu__link">Редактирование</a></li>
			<li><a href="allcontent.php" class="menu__link">Вся информация</a></li>
			<li><a href="index.php" class="menu__link">Выход</a></li>
		</ul>
		<!--------------------  Menu list  --End--  -------------------->
	</nav>
</div>
<!-----------------------------------  Menu  --End--  ----------------------------------->