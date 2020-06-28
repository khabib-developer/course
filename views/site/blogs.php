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
	<title>Blog - CodeClass</title>
</head>
<body>
	<header class="header">
		<div class="head_container">
			<div class="burger">
				<span class="sp"></span>
				<span class="sp"></span>
				<span class="sp"></span>
			</div>
			<a href="/uz" class="header_logo">
				<span class="highlight">{Code}<span class="class">Class</span></span>
			</a>
			<div class="lang-switch">
				<ul class="language-chooser">
					<li class="language-chooser-item-ru"><a href="/blog">RU</a></li>
					<li class="language-chooser-item-uz active"><a href="/uz/blog">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/uz/about-us">Biz haqimizda</a></li>
						<li class="menu-item"><a href="/uz/courses">Kurslar</a></li>
						<li class="menu-item current-menu-item"><a href="/uz/blog">Blog</a></li>
						<li class="menu-item"><a href="/uz/contacts">Bog`lanish</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="mobile__menu">
		<nav class="shift_nav">
			<ul class="menu_items">
				<li class="menu_item"><a href="/uz/about-us" class="gold" style="color: gold !important;">Biz haqimizda</a></li>
				<li class="menu_item"><a href="/uz/courses">Kurslar</a></li>
				<li class="menu_item"><a href="/uz/blog">Blog</a></li>
				<li class="menu_item"><a href="/uz/contacts">Bog`lanish</a></li>
			</ul>
		</nav>
	</div>
	<div class="second__interface">
	</div>
	<div class="banner__blog">
		<div class="banner__content">
			<h1 class="banner_heading">
				Blog
			</h1>
		</div>
	</div>
	
	<section class="section section__blog">
		<div class="section_wrapper">
			<h2 class="section_heading">
			Maqolalar
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
										<a href="/uz/blog/<?php echo $blog['id']; ?>">
											<?php echo $blog['title_uz']; ?>
										</a>
									</h3>
									<div class="blog__item__content">
										<?php echo $blog['short_content_uz']; ?>
									</div>
								</div>
								<div class="blog__footer">
									<a href="/uz/blog/<?php echo $blog['id']; ?>">
										Batafsil
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
				<a href="/uz" class="header_logo">
					<span class="highlight">{Code}<span class="class">Class</span></span>
				</a>
				<div class="footer__copyright">
					©Copyright 2020
				</div>
			</div>
			<div class="footer__section pt-1">
				<div class="footer__heading">
					Navigatsiya
				</div>
				<div class="nav__footer">
					<ul class="nav__items">
						<li class="menu-items"><a href="/uz/about-us">Biz haqimizda</a></li>
						<li class="menu-items"><a href="/uz/courses">Kurslar</a></li>
						<li class="menu-items"><a href="/uz/blog">Blog</a></li>
						<li class="menu-items"><a href="/uz/carera">Karyera</a></li>
						<li class="menu-items"><a href="/uz/contacts">Bog`lanish</a></li>
					</ul>
				</div>	
			</div>
			<div class="footer__section">
				<div class="footer__heading">
					Bog`lanish
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