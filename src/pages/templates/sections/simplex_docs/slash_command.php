<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    require_once "$root/src/php/simplex_additionally/slash_command.php";
    global $localization, $browserLocale, $db_simplex, $env;

    $slash_command = new slash_command();
    $table_commands = $db_simplex->query("SELECT * FROM ".$env['MYSQL_SIMPLEX_TABLE_COMMANDS_LIST'].";");


    error_reporting(0);
    $result = $localization->simplex->docs->under_sidebar->toggles->getting_started->links->{$_GET["section"]}->{$browserLocale};
    if (!$result) $result = $localization->simplex->docs->under_sidebar->toggles->getting_started->links->{$_GET["section"]}->{'eu-US'};
    if ($_GET["slash_command"] === "true") $result = $_GET["section"];

    echo "<h1 class='h1 text-uppercase'>$result</h1><hr>";
    include "$root/src/pages/templates/sections/simplex_docs/{$_GET["section"]}.php";
    if ($_GET["slash_command"] === "true") {
        $sql = "SELECT * FROM {$env['MYSQL_SIMPLEX_TABLE_COMMANDS_LIST']} WHERE `name` = '{$_GET["section"]}' ";
        $command = $db_simplex->query($sql);
        slash_command_description_get($command, $browserLocale);
        $slash_command->slash_command_table_get($command);
        echo "<div class='bg-body-tertiary d-flex flex-column flex-wrap'>";
        slash_command_options_get($command, $browserLocale);
        echo "</div>";
    }