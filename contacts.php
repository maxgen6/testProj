<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test - site</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=3fd797f9-e0f3-406b-8484-5f96fa36e3b6&lang=ru_RU"
		type="text/javascript">
		</script>
</head>

<body>
	<?php include 'blocks/header.php' ?>

	<div class="contacts">
		<div class="container">
			<div class="contacts-inner">
				<h2>Контакты</h2>
				<div class="contacts-block">
					<div class="contact-block">
						<span>Наш адрес</span>
						<a>г. Гродно, ул. Пестрака 36Б, оф. 2</a>
					</div>
					<div class="contact-block">
						<span>Наш телефон</span>
						<a href="tel:+375298870213">+375 29 887 02 13</a>
					</div>
					<div class="contact-block">
						<span>Напиша почта</span>
						<a href="mailto:pvs-tech@yandex.ru">pvs-tech@yandex.ru</a>
					</div>
				</div>
			</div>
		</div>

		<div id="map" style="width: 100%; height: 400px; margin-top: 50px"></div>
	</div>

	<?php include 'blocks/footer.php' ?>

	

	<script type="text/javascript">
		ymaps.ready(init);
		function init() {
			// Создание карты.
			var myMap = new ymaps.Map("map", {
				center: [53.653757, 23.837012],
				zoom: 16
			});

			// Создание геообъекта с типом точка (метка).
			var myGeoObject = new ymaps.GeoObject({
				geometry: {
					type: "Point", // тип геометрии - точка
					coordinates: [53.653757, 23.837012] // координаты точки
				}
			});

			// Размещение геообъекта на карте.
			myMap.geoObjects.add(myGeoObject);
		}
	</script>
</body>

</html>