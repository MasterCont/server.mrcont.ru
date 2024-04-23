<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Использование искусственного интеллекта</h1><hr>
<p class="lead">Инструкция по использованию искусственного интеллекта в Discord канале сервера.</p>
<div class="bd-example-snippet bd-code-snippet">
    <div class="bd-example m-0 border-0">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Шаг первый</h4>
            <p>Включите систему искусственного интеллекта на вашем discord сервере.</p>
            <hr>
            <p class="mb-0">Для этого используйте команду <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=ai_system&amp;slash_command=true" hx-target="#content"  class="btn btn-secondary"> /ai_system</button> в статусе <span class="badge bg-secondary">True</span>.</p>
        </div>

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Шаг второй</h4>
            <p>Укажите текстовый канал. ИИ будет работать только в указанном канале.</p>
            <hr>
            <p class="mb-0">Для этого используйте команду <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=set_chat_ai&amp;slash_command=true" hx-target="#content"  class="btn btn-secondary"> /set_chat_ai</button>.</p>
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Шаг третий - используйте!</h4>
            <p>Для отправки текстовых запросов существует два способа:</p>
            <p>1. Пинганите (от англ. ping - "пинговать") имя приложения в создаваемом сообщении, после чего введите желаемый текст запроса.</p>
            <p>2. Ответьте на сообщение приложения.</p>
        </div>


    </div>
</div>