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
	<title><?php echo $blogView['title_uz']; ?></title>
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
					<li class="language-chooser-item-ru"><a href="<?php echo "/".$ssilka ?>">RU</a></li>
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
				<li class="menu_item"><a href="/uz/about-us" class="gold" style="color: gold !important;">О нас</a></li>
				<li class="menu_item"><a href="/uz/courses">Курсы</a></li>
				<li class="menu_item"><a href="/uz/blog">Блог</a></li>
				<li class="menu_item"><a href="/uz/contacts">Контакты</a></li>
			</ul>
		</nav>
	</div>
	<div class="second__interface">
	</div>
	<div class="banner__view__blog" style=" background: url('<?php echo One::getImage($blogView["id"]); ?>')  center center/cover no-repeat;">
		<div class="banner__contents">
			<h1 class="banner_heading">
				<?php echo $blogView['title_uz']; ?>
			</h1>
			<div class="banner_cta">
				<a href="/uz/blog" class="blog__back">←&nbsp;Boshqa blog maqolalari</a>
			</div>
		</div>
	</div>
	
	<section class="section">
		<div class="section__wrapper">
			<div class="section__contents">
				<?php echo $blogView['content_uz']; ?>
				<!-- <p><span style="font-weight: 400;">Не секрет, что в настоящее время программирование считается востребованной и высокооплачиваемой профессией. С каждым днем IT-компании делают выгодные предложения и предлагают хорошую сумму за проекты. Но что если вы только окончили курсы веб-разработчика и у вас мало опыта в этой сфере? </span></p><p><span style="font-weight: 400;">К сожалению, джуниорских вакансий мало, ведь все работодатели хотят, чтобы к ним пришел человек, который грамотно умеет писать код. В то же время, сейчас существует огромная потребность в программистах. </span></p><p><strong>Как новичку получить первую работу?</strong></p><p>Прежде всего укажите в резюме, что вы специализируетесь на чем-то одном, например на JavaScipt. Не нужно в описании вашего резюме писать, что  вы отлично владеете всеми технологиями. Если вы перечислите кучу языков, то возможно, работодатель подумает, что вы коснулись всего поверхностно.</p><p><strong>Правильно выберите язык.</strong></p><p><span style="font-weight: 400;">Не нужно искать экзотические языки, старайтесь освоить самые популярные и востребованные технологии как HTML, CSS, JavaScript, PHP, C++, Python, C#</span><span style="font-weight: 400;">, Laravel и другие. Если вы настроены работать только с визуальной частью сайтов, то достаточно будет освоить три языка: </span><span style="font-weight: 400;">HTML, CSS, JavaScript.</span></p><p><span style="font-weight: 400;">Очевидно, что от начинающего веб-разработчика никто не ожидает, что он полетит в космос. Работодателю нужно, чтобы вы максимально были честны когда говорите о своих знаниях. </span></p><p><strong>Образование.</strong></p><p><span style="font-weight: 400;">Вы спросите, нужно ли в резюме указывать уровень образования или наличие каких-то сертификатов,полученных на специализированных курсах? </span></p><p><span style="font-weight: 400;">При первичном отборе работодатели ориентируются именно по этому критерию. Они смотрят на опыт работы и на образование, чтобы сделать какой-то вывод. Поэтому смело указываете в резюме о наличии диплома или сертификата. </span></p><p><strong>Портфолио.</strong></p><p>Наверное вы уже знаете, что портфолио  &#8212; очень важная вещь на этапе отбора. Посмотрев на ваше портфолио работодатель сможет оценить, в состоянии ли вы решить ту или иную задачу.</p><p><span style="font-weight: 400;">Что можно написать в портфолио?</span></p><p>Создайте небольшой сайт и выложите его, лучше всего на Github. Работодателю расскажите детали вашего сайта: какие технологии вы использовали, что из себя представляет веб-сайт и покажите код. Также можете сделать пару других сайтов с использованием других технологий.</p><p><strong>Отклик на вакансии.</strong></p><p><span style="font-weight: 400;">До того, как начать искать работу, подумайте каким должен быть ваш идеальный рабочий день? Представьте в каком офисе вам хотелось бы работать и какие проекты вы бы хотели получить. Однако, будьте реалистичны в своих желаниях, ведь для работы в крупной компании с высокой заработной платой вам необходимо получить какой-то опыт. </span></p><p><span style="font-weight: 400;">Отправляйте отклики на все вакансии, которые вы считаете интересными. Если вы получили тестовое задание, то взяв на себя ответственность, выполните его в указанные сроки. </span></p><p><strong>Испытательный срок.</strong></p><p><span style="font-weight: 400;">Испытательный срок -это подстраховка для работодателя. Старайтесь в этот период показать себя с лучшей стороны. Не стесняйтесь задавать вопросы, если у вас не получается с той или иной задачкой. Лучше обратиться за помощью к старшему веб-разработчику, чем тратить на задачку два-три дня. В противном случае, работодатель подумает, что вы не способны справиться с простой задачкой вовремя. </span></p><p>&nbsp;</p> -->
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