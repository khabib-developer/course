<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/template/assets/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/template/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/template/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/template/assets/css/all.css">
	<title>Контакты CodeClass</title>
</head>
<body>
	<header class="header">
		<div class="head_container">
			<div class="burger">
				<span class="sp"></span>
				<span class="sp"></span>
				<span class="sp"></span>
			</div>
			<a href="/" class="header_logo">
				<span class="highlight">{Code}<span class="class">Class</span></span>
			</a>
			<div class="lang-switch">
				<ul class="language-chooser">
					<li class="language-chooser-item-ru active"><a href="">RU</a></li>
					<li class="language-chooser-item-uz"><a href="/uz/contacts">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/about-us">О нас</a></li>
						<li class="menu-item"><a href="/courses">Курсы</a></li>
						<li class="menu-item"><a href="/blog">Блог</a></li>
						<li class="menu-item current-menu-item"><a href="/contacts">Контакты</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="mobile__menu">
		<nav class="shift_nav">
			<ul class="menu_items">
				<li class="menu_item"><a href="/about-us" class="gold" style="color: gold !important;">О нас</a></li>
				<li class="menu_item"><a href="/courses">Курсы</a></li>
				<li class="menu_item"><a href="/blog">Блог</a></li>
				<li class="menu_item"><a href="/contacts">Контакты</a></li>
			</ul>
		</nav>
	</div>
	<div class="second__interface">
	</div>
	<div class="banner__contact">
		<div class="banner__content">
			<h1 class="banner_heading">
				Контакты
			</h1>
		</div>
	</div>
	
	<section class="section">
		<div class="section_wrapper">
			<h2 class="section_heading">
			Свяжитесь с нами!
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="contact">
				<form action="" method="post">
					<?php if (isset($errors) && is_array($errors)): ?>
					<span style='color:red;font-size:20px;'>Пожалуйста, проверьте введенные данные и исправьте ошибки перед отправкой</span>
					<ul style="list-style: none;" class="pl-0">
						<?php foreach ($errors as $error): ?>
							<li> - <?php echo $error; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<div class="forms_body"><input 
					<?php if (isset($errors['name'])) {
						echo "style='border-color:red !important;'"; } 
					?>
					type="text" name="name" placeholder="Имя"></div>
					<div class="forms_body"><input
					<?php if (isset($errors['email'])) {
						echo "style='border-color:red !important;'"; } 
					?>
					type="email" name="email" placeholder="E-mail"></div>
					<div class="forms_body"><input type="text" name="theme" placeholder="Тема"></div>
					<div class="forms_body"><textarea 
					<?php if (isset($errors['message'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					name="message" id="" cols="50" rows="10" placeholder="Сообщение"></textarea> </div>
					<div><input type="submit" name="submit" class="btn btn-primary mt-4"></div>
				</form>
			</div>
		</div>
	</section>

	<footer>
		<div class="foot__container">
			<div class="footer__section">
				<a href="/" class="header_logo">
					<span class="highlight">{Code}<span class="class">Class</span></span>
				</a>
				<div class="footer__copyright">
					©Copyright 2020
				</div>
			</div>
			<div class="footer__section pt-1">
				<div class="footer__heading">
					Навигация
				</div>
				<div class="nav__footer">
					<ul class="nav__items">
						<li class="menu-items"><a href="/about-us">О нас</a></li>
						<li class="menu-items"><a href="/courses">Курсы</a></li>
						<li class="menu-items"><a href="/blog">Блог</a></li>
						<li class="menu-items"><a href="/carera">Карьера</a></li>
						<li class="menu-items"><a href="/contacts">Контакты</a></li>
					</ul>
				</div>	
			</div>
			<div class="footer__section">
				<div class="footer__heading">
					Контакты
				</div>
				<div class="footer__static">
					E-mail: hi@codeclass.uz
				</div>
			</div>
			<div class="footer__section"></div>
		</div>
	</footer>
					 
<script src="/template/assets/js/jquery-3.4.1.min.js"></script>
<script src="/template/assets/js/bootstrap.js"></script>
<script src="/template/assets/js/script.js" type="text/javascript"></script>	
</body>
</html>