<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ООО "ГКСМ". Интернет магазин инженерного оборудования</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
</head>
<body>
	<?php include "includes/blocks/header.php"; ?>

	<nav class="topnav-container">
		<div class="fixed clearfix">
			<div class="topnav-container__toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class="topnav-container__menu">
				<li><a href="#">Акции</a></li>
				<li><a href="#">Доставка и оплата</a></li>
				<li><a href="#">Сертификаты и гарантии</a></li>
				<li><a href="#">Распродажа</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			<div class="topnav-container__search">
				<span class="topnav-container__search-icon"></span>
				<span class="topnav-container__search-close"></span>
				<input class="topnav-container__search-input" type="text" placeholder="ПОИСК...">
			</div>
		</div>
		<div class="topnav-container__catalog-container topnav-container__catalog-container_fixed">
			<div class="topnav-container__catalog">
				<ul>
					<li><a href="#">Краны шаровые</a></li>
					<li><a href="#">Дисковые поворотные затворы</a></li>
					<li><a href="#">Задвижки</a></li>
					<li><a href="#">Вентили</a></li>
					<li><a href="#">Фильтры</a></li>
					<li><a href="#">Клапаны</a></li>
					<li><a href="#">Детали трубопроводов</a></li>
				</ul>
				<ul>
					<li><a href="#">Балансировочные и запорно-регулирующие клапаны</a></li>
					<li><a href="#">Приводы</a></li>
					<li><a href="#">Терморегулирование, узлы обвязки радиаторов</a></li>
					<li><a href="#">Регуляторы расхода и перепада давления</a></li>
					<li><a href="#">Системы поддержания давления и качества воды</a></li>
				</ul>
				<ul>
					<li><a href="#">Насосное оборудование</a></li>
					<li><a href="#">Сепараторы</a></li>
					<li><a href="#">Баки</a></li>
					<li><a href="#">Контрольно-измерительные приборы и автоматика</a></li>
					<li><a href="#">Смотровые стекла</a></li>
					<li><a href="#">Воздухоотводчики</a></li>
					<li><a href="#">Конденсатоотводчики</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="catalog">
		<div class="fixed">
			<div class="catalog-filter">
				<div class="catalog-filter__container">
					<div class="catalog-filter__heading">
						<h2>Цена</h2>
					</div>
					<div class="catalog-filter__price">
						<input class="catalog-filter__price-input" type="number" placeholder="2">
						-
						<input class="catalog-filter__price-input" type="number" placeholder="2484639">
					</div>
					<div class="catalog-filter__range">
						<div id="catalog-filter__range"></div>
						  <input type="text" id="amount" readonly>
					</div>
				</div>
				<div class="catalog-filter__container">
					<div class="catalog-filter__heading">
						<h2>Производитель</h2>
					</div>
					<div class="catalog-filter__search">
						<input class="catalog-filter__search-input" type="text" placeholder="ПОИСК...">
					</div>
					<div class="catalog-filter__checkboxes">
						<ul>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="andersson"><label class="catalog-filter__checkbox-label" for="andersson">Tour andersson</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="danfoss"><label class="catalog-filter__checkbox-label" for="danfoss">Danfoss</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="herz"><label class="catalog-filter__checkbox-label" for="herz">Herz</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="zetkama"><label class="catalog-filter__checkbox-label" for="zetkama">Zetkama</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="genebre"><label class="catalog-filter__checkbox-label" for="genebre">Genebre</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="itap"><label class="catalog-filter__checkbox-label" for="itap">Itap</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="heimeier"><label  class="catalog-filter__checkbox-label" for="heimeier">Heimeier</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="uni-fitt"><label class="catalog-filter__checkbox-label" for="uni-fitt">Uni-fitt</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="ldm"><label class="catalog-filter__checkbox-label" for="ldm">Ldm</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="pneumatex"><label class="catalog-filter__checkbox-label" for="pneumatex">Pneumatex</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="watts"><label class="catalog-filter__checkbox-label" for="watts">Watts</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="vir"><label class="catalog-filter__checkbox-label" for="vir">Vir</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="cimberio"><label class="catalog-filter__checkbox-label" for="cimberio">Cimberio</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="cmo"><label class="catalog-filter__checkbox-label" for="cmo">Cmo</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="adca"><label class="catalog-filter__checkbox-label" for="adca">Adca</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="grundfos"><label  class="catalog-filter__checkbox-label" for="grundfos">Grundfos</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="auma"><label class="catalog-filter__checkbox-label" for="auma">Auma</label></li>
						</ul>
					</div>
				</div>
				<div class="catalog-filter__container">
					<div class="catalog-filter__heading">
						<h2>Материал корпуса</h2>
					</div>
					<div class="catalog-filter__checkboxes">
						<ul>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="ametal"><label class="catalog-filter__checkbox-label" for="ametal">Ametal</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="bronza"><label class="catalog-filter__checkbox-label" for="bronza">Бронза</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="plastik"><label class="catalog-filter__checkbox-label" for="plastik">Пластик</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="latun"><label class="catalog-filter__checkbox-label" for="latun">Латунь</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="stal"><label class="catalog-filter__checkbox-label" for="stal">Сталь</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="nerzh-stal"><label class="catalog-filter__checkbox-label" for="nerzh-stal">Нержавеющая сталь</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="chugun"><label  class="catalog-filter__checkbox-label" for="chugun">Чугун</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="epdm"><label class="catalog-filter__checkbox-label" for="epdm">Epdm</label></li>
						</ul>
					</div>
				</div>
				<div class="catalog-filter__container">
					<div class="catalog-filter__heading">
						<h2>Тип присоединения</h2>
					</div>
					<div class="catalog-filter__checkboxes">
						<ul>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="rezb"><label class="catalog-filter__checkbox-label" for="rezb">Резьбовое</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="flanz"><label class="catalog-filter__checkbox-label" for="flanz">Фланцевое</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="mezhflanz"><label class="catalog-filter__checkbox-label" for="mezhflanz">Межфланцевое</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="bp-bp"><label class="catalog-filter__checkbox-label" for="bp-bp">ВР/ВР</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="hp-hp"><label class="catalog-filter__checkbox-label" for="hp-hp">НР/НР</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="hp-bp"><label class="catalog-filter__checkbox-label" for="hp-bp">НР/ВР</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="svarka-svarka"><label  class="catalog-filter__checkbox-label" for="svarka-svarka">Сварка / сварка</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="shlang"><label class="catalog-filter__checkbox-label" for="shlang">НР / насадка на шланг</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="amerikanka"><label class="catalog-filter__checkbox-label" for="amerikanka">НР типа "Американка"</label></li>
							<li><input class="catalog-filter__checkbox" type="checkbox" id="lug"><label class="catalog-filter__checkbox-label" for="lug">Межфланцевое типа Lug</label></li>
						</ul>
					</div>
				</div>
				<span class="catalog-filter__reset"></span>
			</div>
		</div>
	</section>

	<section class="slider">
		<div class="fixed">
			<div class="slider-heading">
				<h2>Производители</h2>
				<div class="slider-controls">
					<span class="slider-controls__left" id="manufacturers-slider__left"></span>
					<span class="slider-controls__right" id="manufacturers-slider__right"></span>
				</div>
			</div>
			<ul class="manufacturers-slider">
				<li><a target="_blank" href="http://www.genebrerus.ru/" class="manufacturers-slider__genebre"></a></li>
				<li><a target="_blank" href="http://www.imi-hydronic.com/ru/" class="manufacturers-slider__imi"></a></li>
				<li><a target="_blank" href="http://www.danfoss.ru" class="manufacturers-slider__danfoss"></a></li>
				<li><a target="_blank" href="http://www.cimberio.com/rus/" class="manufacturers-slider__cimberio"></a></li>
				<li><a target="_blank" href="https://www.broen.ru" class="manufacturers-slider__broen"></a></li>
				<li><a target="_blank" href="http://www.siemens.com/ru/ru/home.html" class="manufacturers-slider__siemens"></a></li>
			</ul>
		</div>
	</section>

	<?php include "includes/blocks/footer.php"; ?>

	<div id="callback-overlay">
		<div class="overlay-container">
			<div class="overlay-container__header">
				<div class="fixed">
					<p>Заказать обратный звонок</p>
					<span class="overlay-container__close"></span>
				</div>
			</div>
			<div class="fixed">
				<?php include "includes/blocks/form_overlay.php"; ?>
			</div>
		</div>
	</div>

	<span class="top-btn"></span>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/sliders/main.js"></script>
	<script src="js/sliders/products.js"></script>
	<script src="js/sliders/certificates.js"></script>
	<script src="js/sliders/manufacturers.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/range.js"></script>
</body>
</html>