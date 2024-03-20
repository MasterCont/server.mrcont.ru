<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Adding to the server</h1><hr>
<h4 class="h4">To add an application to your server, you need to:</h4>
<ul>
    <li>Go to the main page of the website;</li>
    <li>Click on the button <span class="badge text-bg-info"> <?php echo $localization->simplex->main->buttons->button_add->{"eu-US"};?> </span> </li>
    <li>Follow the Discord instructions</li>
</ul>

<div role="alert" class="alert alert-warning">
    <h4 class="alert-heading">Warning!</h4>
    <p>To work successfully, the application must be granted administrator rights so that the application does not have problems obtaining server system rights.</p>
    <hr>
    <p class="mb-0">To function correctly, leave all the boxes "as is".</p>
</div>

<div role="alert" class="alert alert-info">
    <h4 class="alert-heading">Default Settings</h4>
    <p>After logging in to the server, if the application was not previously on the server, then the application creates a local server database.</p>
    <p>By default, the application will collect user messages, saving them to its database.</p>
    <hr>
    <p class="mb-0">To disable message saving, use the command <button hx-get="/src/pages/templates/sections/simplex_docs/slash_command?section=log_system&amp;slash_command=true" hx-target="#content"  class="btn btn-secondary"> /log_system</button> .</p>
</div>