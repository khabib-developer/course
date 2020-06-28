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
	<title><?php echo $courseView['title']; ?></title>
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
					<li class="language-chooser-item-uz"><a href="<?php echo "/uz".$_SERVER['REQUEST_URI']; ?>">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/about-us">О нас</a></li>
						<li class="menu-item"><a href="/courses">Курсы</a></li>
						<li class="menu-item"><a href="/blog">Блог</a></li>
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
		<div class="banner__contents">
			<h1 class="banner_heading">
				<?php echo $courseView['title']; ?> - Online
			</h1>
		</div>
	</div>
	
	<section class="section section_grey">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Описание курса
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
					<?php echo $courseView['content']; ?>
				</p>
			</div>
		</div>
	</section>
	<section class=" section section_center" style="background: #f6f6f6;">
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
	<section class="section section_features">
		<div class="section_wrapper">
			<div class="features">
				<div class="row">
					<div class="col-md-4">
						<div class="features__icon mb-4">
							<img src="/template/assets/img/pngguru.com.png" height="120px" alt="">
						</div>
						<h2 class="features__heading">2 МЕСЯЦА</h2>
					</div>
					<div class="col-md-4">
						<div class="features__icon mb-4">
							<img src="/template/assets/img/clock.png" height="120px" alt="">
						</div>
						<h2 class="features__heading">2 ДНЯ В НЕДЕЛЮ ПО 2 ЧАСА</h2>
					</div>
					<div class="col-md-4">
						<div class="features__icon mb-4">
							<img src="/template/assets/img/money.png" height="120px" alt="">
						</div>
						<h2 class="features__heading">900 000 СУМ ЗА ВЕСЬ КУРС</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_grey section__about">
		<div class="section__image">
			
		</div>
		<div class="section section_wrapper section_about_wrapper">
			<h2 class="section_heading" style="text-align: left;">
				Качественное образование
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="section_content" style="text-align: left;">
				<p>
					<?php echo $courseView['res']; ?>
					<!-- Наша программа составлена командой специалистов с многолетним опытом и включает в себя как теорию так и практические задания. Технологии и языки которые мы используем в наших образовательных программах тщательно отбираются исходя из их актуальности и востребованности. -->
				</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="">
			<h2 class="section_heading">
				Программа курса
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="course">
				<div class="course__header">
					<div class="course__desc__short">
						<h2><?php echo $courseView['name']; ?><!-- HTML & CSS. I --></h2>
						<div class="course__plan">
							Базовый
						</div>
					</div>
					<div class="desc__full">
						<div class="course__inner">
							<h2 class="course__title" style="text-align: left !important;"><?php echo $courseView['plan']; ?><!-- Основные принципы верстки --></h2>
							<div class="course__duration">
								1 месяц
							</div>
						</div>
						<div class="course__expand" id="arrow">
							<i class="fa fa-angle-right fa-2x" id="arrowIcon"></i>
						</div>
					</div>
				</div>
				<div class="course__item">
					<div class="course__programm">
						<div class="course__image">
							<img src="<?php echo One::getCourseImage($courseView['id']); ?>" width="100%" alt="">
						</div>
						<ol class="course__lines">
							<?php foreach ($coursePlan as $coursePlans): ?>
								<li class="course__line"><?php echo $coursePlans['title']; ?></li>
							<?php endforeach; ?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section_new_grey">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Свяжись с нами
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
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
					type="text" name="name" class="form_name" placeholder="Ismingiz"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Telefon raqamingiz"></div>
					<div class="inputs pb-2" id="submit"><input type="submit" name="submit" value="Yuborish" class="btn btn-primary"></div>
					<?php if (isset($result)): ?>
						<?php echo $success; ?>
					<?php endif ?>
				</form>
			</div>	
		</div>
	</section>
	<section class="section">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Что требуется от тебя
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
			<div class="section_content">
				<ol class="advantages__list">
					<li class="advantages__item">Личный ноутбук</li>
					<li class="advantages__item">Желание <del>покорить вселенную</del> стать программистом</li>
				</ol>	
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
					type="text" name="name" class="form_name" placeholder="Ismingiz"></div>
					<div class="inputs"><input
					<?php if (isset($errors['phone'])) {
						echo "style='border-color:red !important;'"; } 
					?> 
					type="text" name="phone" class="phone_number" placeholder="Telefon raqamingiz"></div>
					<div class="inputs pb-2" id="submit"><input type="submit" name="submit" value="Yuborish" class="btn btn-primary"></div>
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
				<a href="" class="header_logo">
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