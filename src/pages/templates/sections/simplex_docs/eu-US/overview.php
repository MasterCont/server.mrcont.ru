<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $localization, $browserLocale;

?>

<h1 class='h1 text-uppercase'>Overview</h1><hr>
<p class="lead"> Simplex is a multifunctional discord bot that provides a wide range of functions to manage and improve your Discord server. It offers many useful commands that will help you manage the server, moderate chats, find out information about users and much more. </p>
<h4 class="h4 my-2">The main advantages of Simplex:</h4>
<ul>
    <li>1. Logging of messages, including media content.</li>
    <li>2. Easy use and sending of "embed" content.</li>
    <li>3. Sufficient moderation functionality.</li>
    <li>4. The system of virtual marriage of users.</li>
    <li>5. Simple and interesting commands available to all users.</li>
    <li>6. Commands in the user interface.</li>
</ul>
<p class="lead">Simplex is a great choice for anyone who wants to improve their Discord server and make it more functional and secure. Install Simplex today and enjoy all its benefits!</p>
<button type="button" class="btn btn-primary" hx-get="/src/pages/templates/sections/simplex_docs/eu-US/adding" hx-target="#content">How do I add an application to the server?</button>