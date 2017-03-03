<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ООО "ГКСМ". Интернет-магазин инженерного оборудования</title>
	<link rel="stylesheet" href="css/styles.css?<?= rand(0,100000) ?>">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/responsive_320.css?<?= rand(0,100000) ?>">
	<link rel="stylesheet" href="css/responsive_648-1024.css?<?= rand(0,100000) ?>">
	<link rel="stylesheet" href="css/responsive_1150.css?<?= rand(0,100000) ?>">
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
</head>
<body>
	<?php include "includes/blocks/header.php"; ?>

		<nav class="topnav-container">
		<div class="fixed clearfix">
			<div class="topnav-container__mobile-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="topnav-container__search">
				<span class="topnav-container__search-icon"></span>
				<span class="topnav-container__search-close"></span>
				<input class="topnav-container__search-input" type="text" placeholder="ПОИСК...">
			</div>
			<ul class="topnav-container__menu">
				<li><a href="#" class="topnav-container__toggle">Каталог</a></li>
				<li><a href="#">Акции</a></li>
				<li><a href="#">Доставка и оплата</a></li>
				<li><a href="#">Сертификаты и гарантии</a></li>
				<li><a href="#">Распродажа</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			
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

	<section class="cart">
		<div class="fixed clearfix">
			<div class="section-heading">
				<h2>Корзина</h2>
			</div>
			<div class="cart-table">
				<table>
					<tr class="cart-table__header">
						<th>Товар</th>
						<th>Цена за единицу</th>
						<th>Количество</th>
						<th>Итого</th>
						<th></th>
					</tr>
					<tr class="cart-table__row">
						<td class="td-product">
							<div class="cart-table__product">
								<div class="cart-table__product-img"><img src="images/products/item_2.jpg" alt=""></div>
								<div class="cart-table__product-description">БАЛАНСИРОВОЧНЫЙ КЛАПАН STAD БЕЗ ДРЕНАЖА</div>
								<div class="product-discount cart-table__product-discount">40%</div>
							</div>
						</td>
						<td class="td-price"> 
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">3 186 &#8381;</div>
							</div>
						</td>
						<td class="td-count">
							<div class="cart-table__product-container">
								<div class="cart-table__count">
									<span class="cart-table__count-minus"></span>
									<input value="1" type="number" class="cart-table__count-input">
									<span class="cart-table__count-plus"></span>
								</div>
							</div>
						</td>
						<td class="td-total">
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">3 186 &#8381;</div>
							</div>
						</td>
						<td class="td-delete">
							<a href="#" class="cart-table__delete-product btn-right">Удалить</a>
						</td>
					</tr>
					<tr class="cart-table__row">
						<td class="td-product">
							<div class="cart-table__product">
								<div class="cart-table__product-img"><img src="images/products/item_7.jpg" alt=""></div>
								<div class="cart-table__product-description">ЭЛЕКТРОПРИВОД DANFOS AME 130/140</div>
							</div>
						</td>
						<td class="td-price"> 
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">26 564 &#8381;</div>
							</div>
						</td>
						<td class="td-count">
							<div class="cart-table__product-container">
								<div class="cart-table__count">
									<span class="cart-table__count-minus"></span>
									<input value="1" type="number" class="cart-table__count-input">
									<span class="cart-table__count-plus"></span>
								</div>
							</div>
						</td>
						<td class="td-total">
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">26 564 &#8381;</div>
							</div>
						</td>
						<td class="td-delete">
							<a href="#" class="cart-table__delete-product btn-right">Удалить</a>
						</td>
					</tr>
					<tr class="cart-table__row">
						<td class="td-product">
							<div class="cart-table__product">
								<div class="cart-table__product-img"><img src="images/products/similar-products/item_1.jpg" alt=""></div>
								<div class="cart-table__product-description">КЛАПАН ОБРАТНЫЙ ДВУХСТВОРЧАТЫЙ ZETKAMA 407A</div>
							</div>
						</td>
						<td class="td-price"> 
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">2 377 &#8381;</div>
							</div>
						</td>
						<td class="td-count">
							<div class="cart-table__product-container">
								<div class="cart-table__count">
									<span class="cart-table__count-minus"></span>
									<input value="1" type="number" class="cart-table__count-input">
									<span class="cart-table__count-plus"></span>
								</div>
							</div>
						</td>
						<td class="td-total">
							<div class="cart-table__product-container">
								<div class="cart-table__product-price">2 377 &#8381;</div>
							</div>
						</td>
						<td class="td-delete">
							<a href="#" class="cart-table__delete-product btn-right">Удалить</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="cart-info">
				<div class="fixed">
					<div class="cart-info__price-info">
						<p>Сумма (32 127 ₽)<br>
						<a class="cart-info__calc" href="#">Расчитать стоимость доставки</a><br>
						Включая скидку (40%)</p>
						<div class="cart-info__total">Итоговая стоимость: 32 127 &#8381;</div>
					</div>
				</div>
			</div>
			<div class="cart-info__options">
				<a class="cart-info__buy" href="#">Оформить заказ</a>
				<a class="cart-info__reset" href="#">Пересчитать</a>
				<a class="cart-info__clear" href="#">Очистить корзину</a>
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

	<div id="cart-overlay">
		<div class="overlay-container cart-overlay-container">
			<div class="overlay-container__header cart-overlay-container__header">
				<div class="fixed">
					<p>Добавить товар в корзину</p>
					<span class="overlay-container__close"></span>
				</div>
			</div>
			<div class="fixed clearfix">
				<?php include "includes/blocks/cart_overlay.php"; ?>
			</div>
		</div>
	</div>

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
</body>
</html>