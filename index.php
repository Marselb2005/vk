<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--Главная страница-->
	<div class="line">
		<h2>
			VK
		</h2>
	</div>

	<div class=" container">
		<div class="row">
			<div class="col-4">
					<h2>Вконтакте для мобильных устройств</h2>
				<p>Установите официальное мобильное приложение ВКонтакте и оставайтесь в курсе новостей Ваших друзей, где бы Вы ни находились.</p>
				<img src="img/vk.png" height="300px">
			</div>
			<div class="col-3">
				<form action="proverka.php" method="POST">
					<input type="" name="email" placeholder="Эл.адрес" class="form-control">
					<input type="password" name="password" placeholder="Пароль" class="form-control">
					<button type="submit" class="btn btn-primary">Авторизация</button>
				</form>
			
				<div class="">
					<form method="POST" action="reg.php">
						<input type="" name="email" placeholder="Моб.телефон или эл.адрес"  class="form-control">
						<input type="" name="name" placeholder="Имя и Фамилия"  class="form-control">
						<input type="password" name="password" placeholder="Пароль" class="form-control">
						<p>Дата рождения</p>
						<input type="" name="day" placeholder="День" class="form-control">
						<input type="" name="month" placeholder="Месяц" class="form-control">
						<input type="" name="year" placeholder="Год" class="form-control">
						<button type="submit" class="btn btn-primary">
							Зарегатся
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>