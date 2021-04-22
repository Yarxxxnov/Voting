<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<!-- Заголовок вкладки -->
	<title>Голосования - Создать</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/">
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Голосования
			</a>

			<!-- Навигация из 1 элемента "Открыть голосование"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Открыть голосование</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- КОНЕЦ: Навигация -->

	<!-- НАЧАЛО: Хлебные крошки -->
	<nav class="breadcrumb">
		<div class="container">
			<ol class="breadcrumb my-0 py-0">
				<li class="breadcrumb-item">
					<a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					Открыть голосование
				</li>
			</ol>
		</div>
	</nav>
	<!-- КОНЕЦ: Хлебные крошки -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
		<div class="container">

			<h1>Открыть голосование</h1>
			<hr class="mb-4">

			<form method="POST">
				<div class="form-group">
					<label>Заголовок</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label>Текст описания</label>
					<textarea class="form-control" rows="5" name="text"></textarea>
				</div>
                <div class="form-group">
                    <label>Обложка</label>
                    <input type="text" class="form-control" name="img">
                </div>
                <br>
				<button type="submit" class="btn btn-outline-success">Открыть голосование</button>
                @csrf
			</form>

		</div>
	</main>
	<!-- КОНЕЦ: Основное содержимое страницы -->

</body>

</html>
