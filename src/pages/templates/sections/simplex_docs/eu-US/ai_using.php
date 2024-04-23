<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Using artificial intelligence</h1><hr>
<p class="lead">Instructions for using artificial intelligence in the Discord channel of the server.</p>
<div class="bd-example-snippet bd-code-snippet">
    <div class="bd-example m-0 border-0">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Step one</h4>
            <p>Turn on the artificial intelligence system on your discord server.</p>
            <hr>
            <p class="mb-0">To do this, use the command <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=ai_system&amp;slash_command=true " hx-target="#content" class="btn btn-secondary"> /ai_system</button> in status <span class="badge bg-secondary">True</span>.</p>
        </div>

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Step two</h4>
            <p>Specify the text channel. The AI will only work in the specified channel.</p>
            <hr>
            <p class="mb-0">To do this, use the command <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=set_chat_ai&amp;slash_command=true " hx-target="#content" class="btn btn-secondary"> /set_chat_ai</button>.</p>
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Step three - use!</h4>
            <p>There are two ways to send text requests:</p>
            <p>1. Ping the name of the application in the message you are creating, then enter the desired query text.</p>
            <p>2. Reply to the application message.</p>
        </div>


    </div>
</div>