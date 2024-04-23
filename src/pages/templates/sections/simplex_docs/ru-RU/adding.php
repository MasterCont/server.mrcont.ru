<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Добавление на сервер</h1><hr>
<h4 class="h4">Что-бы добавить приложение на свой сервер, необходимо:</h4>
<ul>
    <li>Перейти на главную страницу веб-сайта;</li>
    <li>Нажать на кнопку <span class="badge text-bg-info"> <?php echo $localization->simplex->main->buttons->button_add->{$browserLocale};?> </span> </li>
    <li>Следовать Discord инструкциям</li>
</ul>

<div role="alert" class="alert alert-warning">
    <h4 class="alert-heading">Предупреждение!</h4>
    <p>Для успешной работы приложению необходимо выдать права администратора, чтобы у приложения не возникало проблем с получением системных прав сервера.</p>
    <hr>
    <p class="mb-0">Для корректного функционирования бота, оставьте все галочки на месте.</p>
</div>

<div role="alert" class="alert alert-info">
    <h4 class="alert-heading">Настройки по умолчанию</h4>
    <p>Если приложение ранее не находилось на сервере, то после авторизации на сервер, приложение создаёт локальную базу данных сервера.</p>
    <p>Приложение по умолчанию будет собирать сообщения пользователей, сохраняя их в свою базу данных.</p>
    <hr>
    <p class="mb-0">Что-бы отключить сохранение сообщений используйте команду <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=log_system&amp;slash_command=true" hx-target="#content"  class="btn btn-secondary"> /log_system</button> .</p>
</div>