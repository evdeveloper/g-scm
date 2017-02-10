<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ООО "ГКСМ"</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
</head>
<body>
	<?php include "includes/header.php" ?>

	<?php include "includes/sliders/main_slider.php"; ?>

	<section class="about__us">
		<div class="fixed">
			<div class="about__us-item"><p>Более <span>40 000</span> наименований оборудования</p></div>
			<div class="about__us-item"><p>До <span>25 лет</span> гарантийной поддержки</p></div>
			<div class="about__us-item"><p>Свыше <span>1 000</span> постоянных заказчиков</p></div>
			<div class="about__us-item"><p>Более <span>5 лет</span> работаем на рынке</p></div>
			<div class="about__us-item"><p>Стандартизация ISO <span>ГОСТ</span> полное соответствие</p></div>
		</div>
	</section>

	<?php include "includes/sliders/products_slider.php"; ?>

	<section class="advantages">
		<div class="fixed clearfix">
			<div class="advantages__item">
				<span class="advantages__thumbsup-icon"></span>
				<div class="advantages__header"><h2>Гарантия качества</h2></div>
				<div class="advantages__caption">
					<p>У нас в продаже только продукция авторитетных производителей, проходящая предельно жесткий контроль качества; мы гарантируем, что торгуем только оригиналами</p>
				</div>
			</div>
			<div class="advantages__item">
				<span class="advantages__briefcase-icon"></span>
				<div class="advantages__header"><h2>Широкий ассортимент</h2></div>
				<div class="advantages__caption">
					<p>У нас в постоянном наличии самый широкий выбор качественного оборудования: нашим покупателям не приходится терять время, ожидая заказанных товаров</p>
				</div>
			</div>
			<div class="advantages__item">
				<span class="advantages__price-icon"></span>
				<div class="advantages__header"><h2>Лучшие цены</h2></div>
				<div class="advantages__caption">
					<p>Прямые деловые контакты с российскими и зарубежными производителями позволяют нам поддерживать цены на все виды товаров на самом конкурентоспособном уровне: наши ценовые предложения - лучшие в регионе</p>
				</div>
			</div>
		</div>
		<div class="advantages__row clearfix">
			<div class="advantages__item">
				<span class="advantages__delivery-icon"></span>
				<div class="advantages__header"><h2>Оперативная доставка</h2></div>
				<div class="advantages__caption">
					<p>Для всех покупателей действует система оперативной доставки</p>
				</div>
			</div>
			<div class="advantages__item">
				<span class="advantages__individual-icon"></span>
				<div class="advantages__header"><h2>Индивидуальный подход</h2></div>
				<div class="advantages__caption">
					<p>Успешная реализация любого проекта, в любое время, в любой среде в интересах наших клиентов</p>
				</div>
			</div>
		</div>
	</section>

	<?php include "includes/sliders/certificates_slider.php"; ?>

	<section class="news">
		<div class="fixed">
			<div class="section__header">
				<h2>Новости</h2>
				<a href="#" class="news__link">Все новости</a>
			</div>
			<div class="news__items">
				<div class="news__item">
					<div class="news__item-header">
						<h2>Вакансия</h2>
						<span class="news__item-date">05/17/2016 автор: Администратор</span>
					</div>
					<div class="news__item-caption">
						<p>Открыта вакансия менеджера по оптовым продажам. Резюме отправлять на почту <a href="mailto:os@g-scm.ru">os@g-scm.ru</a> с пометкой «Работа» в теме письма.</p>
					</div>
					<a href="#" class="news__item-btn">Подробнее</a>
				</div>
				<div class="news__item">
					<div class="news__item-header">
						<h2>Новый склад</h2>
						<span class="news__item-date">04/23/2016 автор: Администратор</span>
					</div>
					<div class="news__item-caption">
						<p>Самое востребованное оборудование теперь еще доступнее. НЕТ долгим срокам 
						поставки!</p>
					</div>
					<a href="#" class="news__item-btn">Подробнее</a>
				</div>
				<div class="news__item">
					<div class="news__item-header">
						<h2>Новые цены</h2>
						<span class="news__item-date">01/19/2016 автор: Администратор</span>
					</div>
					<div class="news__item-caption">
						<p>По итогам 2015 года компания «ГСКМ» признана крупнейшим дилером компании <a href="#">IMI Hydronic Engineering</a>.</p>
					</div>
					<a href="#" class="news__item-btn">Подробнее</a>
				</div>
			</div>
		</div>
	</section>

	<?php include "includes/sliders/manufacturers_slider.php"; ?>
	
	<?php include "includes/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
	<script src="js/sliders.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/tabs.js"></script>
</body>
</html>