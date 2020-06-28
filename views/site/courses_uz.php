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
	<title>Kurslar - CodeClass</title>
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
					<li class="language-chooser-item-ru"><a href="/courses">RU</a></li>
					<li class="language-chooser-item-uz active"><a href="/uz/courses">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/uz/about-us">Biz haqimizda</a></li>
						<li class="menu-item current-menu-item"><a href="/uz/courses">Kurslar</a></li>
						<li class="menu-item"><a href="/uz/blog">Blog</a></li>
						<li class="menu-item"><a href="/uz/contacts">Bog`lanish</a></li>
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
	<div class="banner__courses">
		<div class="banner__content">
			<h1 class="banner_heading">
				Bizning kurslarimiz
			</h1>
		</div>
	</div>
	<section class="section">
		<div class="section_wrapper">
			<div class="features">
				<div class="row">
					<?php foreach ($courses as $course): ?>
					<div class="col-md-6 mb-4">
						<a href="/uz/courses/<?php echo $course['id']; ?>" class="pt-4">
							<div class="items_inner">
								<div class="features_item_inner">
									<h2 class="features_heading">
										<?php echo $course['title_uz']; ?>
										<!-- Основы Веб Разработки | 900 000 сум -->
									</h2>
									<h3 class="features_under_heading">
										<!-- На кого рассчитан курс: -->
											<?php echo $course['for_who_uz']; ?>
										</h3>
									<div class="features_about_inner">
										<p>
											<?php echo $course['short_content_uz']; ?>
											<!-- <span>
												 — Новичкам в веб-разработке, которые хотят научиться создавать свои собственные проекты;
											</span>
											<span>
												 — Разработчикам, которые хотят освоить современные методы и инструменты верстки. 
											</span> -->
										</p>
									</div>
								</div>
								<div class="features_about_inner_second">
									<div>
										<?php echo $course['result_uz']; ?>
										<!-- Изучив данный курс, ты сможешь самостоятельно написать сайт на чистом HTML, и выложить его в интернет. -->
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section_new_grey">
		<div class="section_wrapper">
			<div class="gf_browser_wrapper">
				<form action="" method="post">
					<?php if (isset($errors) && is_array($errors)): ?>
					<span style='color:red;font-size:20px;'>Пожалуйста, проверьте введенные данные и исправьте ошибки перед отправкой</span>
					<ul style="list-style: none;" class="pl-0">
						<?php foreach ($errors as $error): ?>
							<li> - <?php echo $error; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<div class="inputs"><input
					<?php if (isset($errors['name'])) {
						echo "style='border-color:red !important;'"; } 
					?>
					type="text" name="name" class="form_name" placeholder="Sizning Ismingiz"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Telefon raqamingiz"></div>
					<div class="inputs" id="submit"><input type="submit" name="submit" value="Yuborish" class="btn btn-primary"></div>
				</form>
			</div>		
		</div>
	</section>
	<section class="section">
		<div class="section_wrapper">
			<h2 class="section_heading">
			Tavsiya etilgan yo'nalishlar
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="features">
				<div class="row">
					<div class="col-md-6 pb-4 pb-md-0">
							<div class="items_inners pb-2">
								<div class="features_item_inner">
									<h2 class="features_heading">
										Backend Dasturchi
									</h2>
									<div class="features_about_inners">
										<p>
											Ushbu sohadagi mutaxassis asosan veb-ilova yoki saytning server komponentini dasturlash bilan shug'ullanadi. Buning uchun HTML & CSS kurslarini va PHP + Laravel uchta kursini oʻtib chiqishni tavsiya etamiz.									
										</p>
									</div>
								</div>
								<div class="list_inline">
									<ul class="list__items">
										<li class="list__item"><img src="/template/assets/img/python.png" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/WordPress.png" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/php.jpg" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/mysql.jpg" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/laravel-logo-9B01588B1F-seeklogo.com_.png" height="70" alt=""></li>
									</ul>
								</div>
							</div>
					</div>
					<div class="col-md-6 pt-4 pt-md-0">
							<div class="items_inners pb-2">
								<div class="features_item_inner">
									<h2 class="features_heading">
										Frontend Dasturchi
									</h2>
									<div class="features_about_inners">
										<p>
											Front-end Dasturchi kursimizni tamomlaganingizdan so'ng, siz ko'p xususiyatlarga boy, moslashuvchan veb-saytlar va ilovalarni yarata oladiga boʻlasiz. Bu soha uchun, biz HTML&CSS kursini, hamda JavaScriptning barcha kurslarini o'tib chiqishni tavsiya etamiz.									
										</p>
									</div>
								</div>
								<div class="list_inline">
									<ul class="list__items">
										<li class="list__item"><img src="/template/assets/img/html_css.png" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/vue.png" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/jquery.png" height="70" alt=""></li>
										<li class="list__item"><img src="/template/assets/img/js.png" height="70" alt=""></li>
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_new_grey">
		<div class="section_wrapper">
			<div class="gf_browser_wrapper">
				<form action="" method="post">
					<?php if (isset($errors) && is_array($errors)): ?>
					<span style='color:red;font-size:20px;'>Пожалуйста, проверьте введенные данные и исправьте ошибки перед отправкой</span>
					<ul style="list-style: none;" class="pl-0">
						<?php foreach ($errors as $error): ?>
							<li> - <?php echo $error; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<div class="inputs"><input
					<?php if (isset($errors['name'])) {
						echo "style='border-color:red !important;'"; } 
					?>
					type="text" name="name" class="form_name" placeholder="Sizning Ismingiz"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Telefon raqamingiz"></div>
					<div class="inputs" id="submit"><input type="submit" value="Yuborish" name="submit" class="btn btn-primary"></div>
				</form>
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
						<li class="menu-items"><a href="/uz/contacts">Bo`lanish</a></li>
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