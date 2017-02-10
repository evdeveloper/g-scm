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


	<div class="product__description">
		<div class="fixed">
			<div class="tabs">
				<ul class="tabs__caption">
				    <li>Описание</li>
				    <li class="active">Характеристики</li>
				    <li>Документация</li>
				</ul>
				<div class="tabs__content">1</div>
				<div class="tabs__content active">
					<div class="product__table">
						<div class="fixed">
							<div class="product__table-row"><p>Производитель</p><span>Genebre</span></div>
							<div class="row__colored"><p>Рабочее давление</p><span>PN16</span></div>
							<div class="product__table-row"><p>Категория</p><span>Пружинный</span></div>
							<div class="row__colored"><p>Материал корпуса</p><span>Чугун</span></div>
							<div class="product__table-row"><p>Материал запорного устройства</p><span>Латунь</span></div>
							<div class="row__colored"><p>Материал уплотнения</p><span>Nitril NBR</span></div>
							<div class="product__table-row"><p>Максимальная рабочая температура (в градусах по Цельсию)</p><span>+100</span></div>
							<div class="row__colored"><p>Тип присоединения</p><span>Межфланцевое</span></div>
						</div>
					</div>
				</div>
				<div class="tabs__content">3</div>
			</div>
		</div>
	</div>

	<?php include "includes/sliders/recently_products_slider.php"; ?>
	
	<?php include "includes/footer.php"; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
	<script src="js/sliders.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/tabs.js"></script>
</body>
</html>