<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Обзор</h1><hr>
<p class="lead"> Simplex - это многофункциональный дискорд бот, который обеспечивает широкий спектр функций для управления и улучшения вашего сервера Discord. Он предлагает множество полезных команд, которые помогут вам управлять сервером, модерировать чаты, узнавать информацию о пользователях и многое другое. </p>
<h4 class="h4 my-2">Основные преимущества Simplex:</h4>
<ul>
    <li>1. Логирование сообщений, в том числе - медиаконтент.</li>
    <li>2. Простое использование и отправление "embed"-контента.</li>
    <li>3. Достаточный функционал модерации.</li>
    <li>4. Система виртуальной женидьбы пользователей.</li>
    <li>5. Простые и интересные команды, доступные всем пользователям.</li>
    <li>6. Команды в пользовательском интерфейсе.</li>
</ul>
<p class="lead">Simplex - отличный выбор для всех, кто хочет усовершенствовать свой сервер Discord и сделать его более функциональным и безопасным. Установите Simplex сегодня и наслаждайтесь всеми его преимуществами!</p>
<button type="button" class="btn btn-primary" hx-get="/src/pages/templates/sections/simplex_docs/ru-RU/adding" hx-target="#content">Как добавить приложение на сервер?</button>