<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    if ($_GET["set"]) setcookie("lang", $_GET["set"]);
    Redirect($_SERVER["HTTP_REFERER"]);
