<?php

    // Файл-обработчик, в котором содержится код функций и команд.
    $root = $_SERVER['DOCUMENT_ROOT'];
    $env = parse_ini_file("$root/.env");


    // Скрипт для локализации страниц
    $localePreferences = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    if(is_array($localePreferences) && count($localePreferences) > 0) {
        $browserLocale = $localePreferences[0];
        $_SESSION['browser_locale'] = $browserLocale;
    }

?>