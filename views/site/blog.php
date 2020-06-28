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
	<title>Блог - CodeClass</title>
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
					<li class="language-chooser-item-uz"><a href="/uz/blog">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/about-us">О нас</a></li>
						<li class="menu-item"><a href="/courses">Курсы</a></li>
						<li class="menu-item current-menu-item"><a href="/blog">Блог</a></li>
						<li class="menu-item"><a href="/contacts">Контакты</a></li>
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
	<div class="banner__blog">
		<div class="banner__content">
			<h1 class="banner_heading">
				Блог
			</h1>
		</div>
	</div>
		<section class="section section__blog">
		<div class="section_wrapper">
			<h2 class="section_heading">
			Недавно добавленное
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="section__content">
				<div class="row ml-0 mr-0 pl-0 pr-0">
					<?php foreach ($blogs as $blog): ?>
						<div class="col-md-4 pl-0 pr-0">
							<div class="blog__items">
								<div class="blog__image" style="background: url('<?php echo One::getImage($blog["id"]); ?>')  center center/cover no-repeat;">	
								</div>
								<div class="blog__content">
									<h3>
										<a href="/blog/<?php echo $blog['id']; ?>">
											<?php echo $blog['title']; ?>
										</a>
									</h3>
									<div class="blog__item__content">
										<?php echo $blog['short_content']; ?>
									</div>
								</div>
								<div class="blog__footer">
									<a href="/blog/<?php echo $blog['id']; ?>">
										Читать дальше
									</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
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