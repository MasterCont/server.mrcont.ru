<?php
    $env = parse_ini_file(".env");
    require_once "src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы

    if ($_SERVER['HTTP_HOST'] === $env["LOCAL_HTTP_HOST_SERVER"]) {
        Redirect("http://localhost");
    } else {
        Redirect("https://{$env["GLOBAL_HTTP_HOST"]}");
    }