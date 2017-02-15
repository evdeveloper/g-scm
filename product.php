<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ООО "ГКСМ". Интернет магазин инженерного оборудования</title>
	<link rel="stylesheet" href="css/styles.css?<?= rand(0,100000) ?>">
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
		<div class="topnav-container__catalog-container">
			<div class="fixed">
				<a href="#" class="topnav-container__catalog-link">Перейти в каталог</a>
			</div>
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

	<section class="product-info">
		<div class="fixed clearfix">
			<div class="product-info__thumbnail">
				<div class="product-info__main-thumbnail">
					<img src="images/products/previews/big_preview.jpg" alt="">
					<span class="product-info__zoom"></span>
				</div>
				<div class="product-info__thumbnails">
					<div class="product-info__thumbnails-item">
						<img src="images/products/previews/small_preview.jpg" alt="">
						<span class="product-info__zoom"></span>
					</div>
					<div class="product-info__thumbnails-item">
						<img src="images/products/previews/small_preview.jpg" alt="">
						<span class="product-info__zoom"></span>
					</div>
					<div class="product-info__thumbnails-item">
						<img src="images/products/previews/small_preview.jpg" alt="">
						<span class="product-info__zoom"></span>
					</div>
				</div>
			</div>

			<div class="product-info__info">
				<div class="section-heading">
					<h2>КЛАПАН ОБРАТНЫЙ ПРУЖИННЫЙ GENEBRE 2450</h2>
				</div>
				<div class="ya-share2" data-services="vkontakte,facebook,twitter,gplus" data-counter=""></div>
				<div class="product-info__price">4207 &#8381;</div>
				<div class="product-info__avalaible"><p>Артикул: 2450 09 Доступность: в наличии</p></div>
				<div class="product-info__config">
					<p>Диаметр:</p>
					<div class="catalog-products__select">
						<span class="catalog-products__select-btn"></span>
						<select class="catalog-products__select-amount">
							<option>DN16</option>
							<option>DN16</option>
							<option>DN16</option>
							<option>DN16</option>
						</select>
					</div>
				</div>
				<div class="product-info__config">
					<p>Количество:</p>
					<div class="cart-table__count product-info__count">
						<span class="cart-table__count-minus product-info__count-minus"></span>
						<input value="1" type="number" class="cart-table__count-input product-info__count-input">
						<span class="cart-table__count-plus product-info__count-plus"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="product-info__table">
		<div class="fixed">
			<div class="tabs">
				<ul class="tabs__caption">
				    <li class="active">Описание</li>
				    <li>Характеристики</li>
				    <li>Документация</li>
				</ul>
					<div class="tabs__content active">
						<h2>Клапан обратный пружинный GENEBRE 2450</h2>
						<p>Предназначен для пропуска потока рабочей среды в одном направлении и предотвращения её движение в противоположном, действуя при этом автоматически и являясь арматурой прямого действия.</p>
					</div>
					<div class="tabs__content">
						<div class="product-info__table-row">
							<div class="fixed">
								<p>Производитель</p><span>Genebre</span>
							</div>
						</div>
						<div class="product-info__table-row product-info__table-row_colored">
							<div class="fixed">
								<p>Рабочее давление</p><span>PN16</span>
							</div>
						</div>
						<div class="product-info__table-row">
							<div class="fixed">
								<p>Категория</p><span>Пружинный</span>
							</div>
						</div>
						<div class="product-info__table-row product-info__table-row_colored">
							<div class="fixed">
								<p>Материал корпуса</p><span>Чугун</span>
							</div>
						</div>
						<div class="product-info__table-row">
							<div class="fixed">
								<p>Материал запорного устройства</p><span>Латунь</span>
							</div>
						</div>
						<div class="product-info__table-row product-info__table-row_colored">
							<div class="fixed">
								<p>Материал улотнения</p><span>Nitril NBR</span>
							</div>
						</div>
						<div class="product-info__table-row">
							<div class="fixed">
								<p>Максимальная рабочая температура (в градусах по Целсию)</p><span>+100</span>
							</div>
						</div>
						<div class="product-info__table-row product-info__table-row_colored">
							<div class="fixed">
								<p>Тип присоединения</p><span>Межфланцевое</span>
							</div>
						</div>
					</div>
					<div class="tabs__content">
					    <p>Техническое описание (2450.pdf, 511 Kb) [<a href="#">Скачать</a>]</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="slider">
		<div class="fixed">
			<div class="tabs">
				<ul class="tabs__caption">
				    <li class="active">Похожие товары</li>
				    <li>Недавно просмотренные</li>
				</ul>
					<div class="tabs__content active">
						<?php include "includes/sliders/similar_products.php"; ?>
					</div>
					<div class="tabs__content">
					    <?php include "includes/sliders/recently_products.php"; ?>
					</div>
				</div>
			</div>
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
	<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
	<script src="https://yastatic.net/share2/share.js"></script>
</body>
</html>