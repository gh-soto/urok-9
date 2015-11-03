<?php

/**
*підключення до файлу з контроллером авторизації 
*та відбір даних з статичному методу моделі цього контроллера
*/

require_once (ROOT . '/models/Authorization.php');
Authorization::logIn();
$editor = Authorization::logIn()['check_login'];

// Якщо раніше заголовок сторінки не був заданий, тоді ми його задаємо.
if (!isset($page_title)) {
	$page_title = 'ns-oxit-study';
}

?>
<!-- Виводимо основну структуру сайту. -->
<!DOCTYPE html>
<html>
<head>
	<title><?php print $page_title; ?></title>
	
	<link rel="stylesheet" type="text/css" href='/template/style/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/template/style/style.css">

	<script src="/template/js/jquery-1.11.3.min.js"></script>
	<script src="/template/js/bootstrap.min.js"></script>
	<script src="/template/js/login-popup.js"></script>

	<link rel="shortcut icon" href="template/img/favicon-16x16.png" type="image/png">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bad+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>

	<meta charset="UTF-8">
</head>
<body>

<?php include(ROOT . '/views/authorization/login_popup.php'); ?>

<!-- Будуємо меню сайту. -->
<div class="header navbar navbar-default">
	<ul class="main-menu">
		<li><a href="/">Головна сторінка</a></li>
		<?php if ($editor): ?>
			<li><a href="/news/add_news">Додати статтю</a></li>
			<li><a href="/logout">Вихід</a></li>
		<?php endif; ?>
		<?php if (!$editor): ?>
			<li><a href="#" onclick="showPopUp()">Вхід</a></li>
		<?php endif; ?>
	</ul>
</div>

