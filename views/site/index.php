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
	<title>Главная страница</title>
</head>
<body>
	<header class="header">
		<div class="head_container">
			<div class="burger" >
				<span class="sp"></span> 
				<span class="sp"></span>
				<span class="sp"></span>
			</div>
<!-- 			<div style="display: flex; justify-content: center;"> -->
				<a href="/" class="header_logo">
					<span class="highlight">{Code}<span class="class">Class</span></span>
				</a>
<!-- 			</div> -->
			<div class="lang-switch">
				<ul class="language-chooser">
					<li class="language-chooser-item-ru active"><a href="">RU</a></li>
					<li class="language-chooser-item-uz"><a href="/uz">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/about-us">О нас</a></li>
						<li class="menu-item"><a href="/courses/">Курсы</a></li>
						<li class="menu-item"><a href="/blog/">Блог</a></li>
						<li class="menu-item"><a href="/contacts/">Контакты</a></li>
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
	<div class="banner">
		<div class="banner__content">
			<h1 class="banner_heading">
				Стань профессиональным
				<br> веб-разработчиком
			</h1>
			<div class="banner_cta">
				<a href="#forms" class="btn btn-primary btn-lg">Начни сегодня</a>
			</div>
		</div>
	</div>
	<section class="section section_grey">
		<div class="section_wrapper">
			<h2 class="section_heading">
				О нас
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="section_content">
				<p>
					CodeСlass это школа программирования и веб разработки в Ташкенте. Наша главная цель — помочь своим студентам начать карьеру в сфере IT. Достичь эту цель нам позволяет команда квалифицированных инструкторов и наставников, за плечами которых опыт в международных компаниях, а также тщательно составленная учебная программа, включающая в себя самые востребованные языки и технологии. Наши курсы по веб разработке это твой первый шаг в начале новой карьеры.
				</p>
			</div>
		</div>
	</section>
	<section class=" section section_center">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Демо урок: Что такое веб сайт?
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="sectio_content">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Ipyfn_gQ5Jw?enablejsapi=1&origin=https%3A%2F%2Fcodeclass.uz" frameborder="0"></iframe>
			</div>
		</div>
	</section>
	<section class="section section_grey">
		<div class="section_wrapper">
			<div class="features">
				<div class="row">
					<?php foreach ($courses as $course): ?>
						<div class="col-md-6 mb-4">
							<a href="courses/<?php echo $course['id']; ?>" class="pt-4">
								<div class="items_inner">
									<div class="features_item_inner">
										<h2 class="features_heading">
											<?php echo $course['title']; ?>
											
										</h2>
										<h3 class="features_under_heading">
											
												<?php echo $course['for_who']; ?>
											</h3>
										<div class="features_about_inner">
											<p>
												<?php echo $course['short_content']; ?>
											</p>
										</div>
									</div>
									<div class="features_about_inner_second">
										<div>
											<?php echo $course['result']; ?>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="section_content second_section_content">
			<a href="/courses" class="btn btn-primary btn-larga">Другие курсы</a>
		</div>
	</section>
	<section class="section_new_grey">
		<div class="section_wrapper">
			<div class="gf_browser_wrapper">
				<form action="/" method="post">
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
					type="text" name="name" class="form_name" placeholder="Твое Имя"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Номер"></div>
					<div class="inputs pb-2" id="submit"><input type="submit" name="submit" class="btn btn-primary"></div>
					<?php if (isset($result)): ?>
						<?php echo $success; ?>
					<?php endif ?>
				</form>
			</div>		
		</div>
	</section>
	<section class="section section-centered">
		<div class="section_wraper">
			<h2 class="section_heading">
				Отзывы
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="section_content">
				<div class="slider">
					<div class="slider__prev">
						<i class="fa fa-caret-left fa-2x"></i>
					</div>
					<div class="slider__content curry">
						<div class="slider__text">После долгих попыток самостоятельного изучения я решил пойти на курсы. В CodeClass ребята мне подробно объяснили программу и процесс обучения. Уроки проходили быстро, так как было очень много практики. Помогала работа в паре с другими ребятами в классе, также учитель объяснял все четко и доступно.</div>
						<div class="slider__user">
							<div class="slider__user__icon">
								<i class="fa fa-user fa-2x"></i>
							</div>
							<div class="slider__user__inform pl-4 pt-2">
								<div class="slider__user__name">
									Sarvar
								</div>
								<div class="slide__user__stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							
						</div>
					</div>
					<div class="slider__content">
						<div class="slider__text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Они безорфографичный, ведущими о предложения себя однажды, она диких, вершину по всей наш приставка напоивший? Толку пунктуация букв большой текста что.</div>
						<div class="slider__user">
							<div class="slider__user__icon">
								<i class="fa fa-user fa-2x"></i>
							</div>
							<div class="slider__user__inform pl-4 pt-2">
								<div class="slider__user__name">
									Xabib
								</div>
								<div class="slide__user__stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							
						</div>
					</div>
					<div class="slider__next">
						<i class="fa fa-caret-right fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_new_grey" id="forms">
		<div class="section_wrapper">
			<div class="gf_browser_wrapper">
				<form action="#forms" method="post">
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
					type="text" name="name" class="form_name" placeholder="Твое Имя"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Номер"></div>
					<div class="inputs pb-2" id="submit"><input type="submit" name="submit" class="btn btn-primary"></div>
					<?php if (isset($result)): ?>
						<?php echo $success; ?>
					<?php endif ?>
				</form>
			</div>		
		</div>
	</section>
	<footer>
		<div class="foot__container">
			<div class="footer__section">
				<a href="" class="header_logo foot">
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