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
	<title><?php echo $courseView['title_uz']; ?></title>
</head>
<body>
	<?php $ssilka = trim($_SERVER['REQUEST_URI'], '/uz');?>
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
					<li class="language-chooser-item-ru"><a href="<?php echo "/".$ssilka; ?>">RU</a></li>
					<li class="language-chooser-item-uz active"><a href="">UZ</a></li>
				</ul>
			</div>
			<nav class="nav">
				<div class="menu-main_menu">
					<ul class="nav_items">
						<li class="menu-item"><a href="/uz/about-us">Biz haqimizda</a></li>
						<li class="menu-item"><a href="/uz/courses">Kurslar</a></li>
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
		<div class="banner__contents">
			<h1 class="banner_heading">
				<?php echo $courseView['title_uz']; ?>
			</h1>
		</div>
	</div>
	
	<section class="section section_grey">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Kurs haqida	
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
					<?php echo $courseView['content_uz']; ?>
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
						<h2 class="features__heading">2 OY</h2>
					</div>
					<div class="col-md-4">
						<div class="features__icon mb-4">
							<img src="/template/assets/img/clock.png" height="120px" alt="">
						</div>
						<h2 class="features__heading">HAFTADA IKKI MARTA 2 SOATDAN</h2>
					</div>
					<div class="col-md-4">
						<div class="features__icon mb-4">
							<img src="/template/assets/img/money.png" height="120px" alt="">
						</div>
						<h2 class="features__heading">900 000 SO'M BUTUN KURS UCHUN</h2>
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
				Nimalarni o'rganasiz
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
					<?php echo $courseView['res_uz']; ?>
					<!-- Наша программа составлена командой специалистов с многолетним опытом и включает в себя как теорию так и практические задания. Технологии и языки которые мы используем в наших образовательных программах тщательно отбираются исходя из их актуальности и востребованности. -->
				</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="">
			<h2 class="section_heading">
				Kurs dasturi	
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
						<h2><?php echo $courseView['name_uz']; ?><!-- HTML & CSS. I --></h2>
						<div class="course__plan">
							Asosiy
						</div>
					</div>
					<div class="desc__full">
						<div class="course__inner">
							<h2 class="course__title" style="text-align: left !important;"><?php echo $courseView['plan_uz']; ?><!-- Основные принципы верстки --></h2>
							<div class="course__duration">
								1 oy
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
								<li class="course__line"><?php echo $coursePlans['title_uz']; ?></li>
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
				Biz bilan bog`laning
				<div class="">
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons middle"></span>
					<span class="svg_icons"></span>
					<span class="svg_icons"></span>
				</div>
			</h2>
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
	<section class="section">
		<div class="section_wrapper">
			<h2 class="section_heading">
				Sizdan nima talab qilinadi
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
					<li class="advantages__item">Shaxsiy noutbuk</li>
					<li class="advantages__item"><del>Koinotni zabt etish </del> programmist bo`lish istagi</li>
				</ol>	
			</div>
		</div>
	</section>
	<section class="section section-centered">
		<div class="section_wraper">
			<h2 class="section_heading">
				Sharhlar
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
						<div class="slider__text">Birinchi darsdan keyin men bemalol veb sahifalarni yarata oldim. Darslar interaktiv va qiziqarli tarzda o'tadi. Ustozlar amaliy tajribasidan bizga misollar keltirib o'qitadilar. CodeClassga yordami uchun katta rahmat!</div>
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
						<div class="slider__text">Judayam qulay kurslar. Ustozlar hammasi tajribali dasturchilar bo'lib bizga eng aktual va talabga ega bo'lgan texnologiya va tillarini o'tgatishgan. O'qishni bitirganimdan keyin ishga joylashib oldim.</div>
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