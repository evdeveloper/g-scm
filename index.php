<!DOCTYPE html>
<html lang="ru">
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
				<a href="catalog.php" class="topnav-container__catalog-link">Перейти в каталог</a>
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

	<?php include "includes/sliders/main.php"; ?>

	<section class="about">
		<div class="fixed">
			<div class="about__item"><p>Более <span>40 000</span> наименований оборудования</p></div>
			<div class="about__item"><p>До <span>25 лет</span> гарантийной поддержки</p></div>
			<div class="about__item"><p>Свыше <span>1 000</span> постоянных заказчиков</p></div>
			<div class="about__item"><p>Более <span>5 лет</span> работаем на рынке</p></div>
			<div class="about__item"><p>Стандартизация ISO <span>ГОСТ</span> полное соответствие</p></div>
		</div>
	</section>

	<section class="slider">
		<div class="fixed">
			<div class="tabs">
				<ul class="tabs__caption">
				    <li class="active">Лидеры продаж</li>
				    <li>Распродажа</li>
				    <li>Новинки</li>
				</ul>
					<div class="tabs__content active">
						<?php include "includes/sliders/products.php"; ?>
					</div>
					<div class="tabs__content">
					    <?php include "includes/sliders/sales.php"; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="advantages">
		<div class="fixed clearfix">
			<div class="advantages-item">
				<span class="advantages-item__thumbsup-icon"></span>
				<div class="advantages-item__heading"><h2>Гарантия качества</h2></div>
				<div class="advantages-item__description">
					<p>У нас в продаже только продукция авторитетных производителей, проходящая предельно жесткий контроль качества; мы гарантируем, что торгуем только оригиналами</p>
				</div>
			</div>
			<div class="advantages-item">
				<span class="advantages-item__briefcase-icon"></span>
				<div class="advantages-item__heading"><h2>Широкий ассортимент</h2></div>
				<div class="advantages-item__description">
					<p>У нас в постоянном наличии самый широкий выбор качественного оборудования: нашим покупателям не приходится терять время, ожидая заказанных товаров</p>
				</div>
			</div>
			<div class="advantages-item">
				<span class="advantages-item__price-icon"></span>
				<div class="advantages-item__heading"><h2>Лучшие цены</h2></div>
				<div class="advantages-item__description">
					<p>Прямые деловые контакты с российскими и зарубежными производителями позволяют нам поддерживать цены на все виды товаров на самом конкурентоспособном уровне: наши ценовые предложения - лучшие в регионе</p>
				</div>
			</div>
		</div>
		<div class="advantages-row clearfix">
			<div class="advantages-item">
				<span class="advantages-item__delivery-icon"></span>
				<div class="advantages-item__heading"><h2>Оперативная доставка</h2></div>
				<div class="advantages-item__description">
					<p>Для всех покупателей действует система оперативной доставки</p>
				</div>
			</div>
			<div class="advantages-item">
				<span class="advantages-item__individual-icon"></span>
				<div class="advantages-item__heading"><h2>Индивидуальный подход</h2></div>
				<div class="advantages-item__description">
					<p>Успешная реализация любого проекта, в любое время, в любой среде в интересах наших клиентов</p>
				</div>
			</div>
		</div>
	</section>

	<section class="slider">
		<div class="fixed">
			<div class="slider-heading">
				<h2>Наши сертификаты</h2>
				<div class="slider-controls">
					<span class="slider-controls__left" id="certificates-slider__left"></span>
					<span class="slider-controls__right" id="certificates-slider__right"></span>
				</div>
			</div>
			<ul id="certificates-slider">
				<li class="certificates-slider__margin"><a href="files/certificates/DAB.pdf" target="_blank" class="certificates-slider__dab"></a></li>
				<li class="certificates-slider__margin"><a href="files/certificates/Genebre.pdf" target="_blank" class="certificates-slider__genebre"></a></li>
				<li class="certificates-slider__margin"><a href="files/certificates/Herz.jpg" target="_blank" class="certificates-slider__herz"></a></li>
				<li class="certificates-slider__margin"><a href="files/certificates/Zetkama.pdf" target="_blank" class="certificates-slider__zetkama"></a></li>
				<li class="certificates-slider__margin"><a href="files/certificates/Grundfos.pdf" target="_blank" class="certificates-slider__grundfos"></a></li>
				<li class="certificates-slider__margin"><a href="files/certificates/IMI.jpg" target="_blank" class="certificates-slider__imi"></a></li>
			</ul>
		</div>
	</section>

	<section class="news">
		<div class="fixed">
			<div class="section-heading">
				<h2>Новости</h2>
				<a href="#" class="news-link">Все новости</a>
			</div>
			<div class="news-items">
				<div class="news-item">
					<div class="news-item__header">
						<h2>Вакансия</h2>
						<span class="news-item__date">05/17/2016 автор: Администратор</span>
					</div>
					<div class="news-item__description">
						<p>Открыта вакансия менеджера по оптовым продажам. Резюме отправлять на почту <a href="mailto:os@g-scm.ru">os@g-scm.ru</a> с пометкой «Работа» в теме письма.</p>
					</div>
					<a href="#" class="news-item__btn">Подробнее</a>
				</div>
				<div class="news-item">
					<div class="news-item__header">
						<h2>Новый склад</h2>
						<span class="news-item__date">04/23/2016 автор: Администратор</span>
					</div>
					<div class="news-item__description">
						<p>Самое востребованное оборудование теперь еще доступнее. НЕТ долгим срокам 
						поставки!</p>
					</div>
					<a href="#" class="news-item__btn">Подробнее</a>
				</div>
				<div class="news-item">
					<div class="news-item__header">
						<h2>Новые цены</h2>
						<span class="news-item__date">01/19/2016 автор: Администратор</span>
					</div>
					<div class="news-item__description">
						<p>По итогам 2015 года компания «ГСКМ» признана крупнейшим дилером компании <a href="#">IMI Hydronic Engineering</a>.</p>
					</div>
					<a href="#" class="news-item__btn">Подробнее</a>
				</div>
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
	<div id="cart-overlay" class="overlay">
		<div class="flex-overlay">
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
	</div>
	<div id="callback-overlay" class="overlay">
		<div class="flex-overlay">
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
	</div>

	<span class="top-btn"></span>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="build/js/sliders.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/tabs.js"></script>
</body>
</html>