<?php

    // Файл-обработчик, в котором содержится код функций и команд.
    $root = $_SERVER['DOCUMENT_ROOT'];
    $env = parse_ini_file("$root/.env");
    $localization = json_decode(file_get_contents("$root/src/localization.json"));
    $locates = ["eu-US", "ru-RU"];
    interface iDiscordBot{
        public function getDiscordBot(?string $id, ?string $token);
    }

    class DiscordBot implements iDiscordBot{
        public function getDiscordBot(?string $id, ?string $token)
        {
            $DISCORD_HTTP_AUTH = "https://discord.com/api/v10/users";
            $DISCORD_BOT_ID = $id;
            $DISCORD_BOT_TOKEN = $token;

            // Create a stream
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Accept-language: en\r\n" .
                        'Authorization: Bot '.$DISCORD_BOT_TOKEN
                )
            );

            $context = stream_context_create($opts);

            $url = "$DISCORD_HTTP_AUTH/$DISCORD_BOT_ID";

            try {
                $response = file_get_contents($url, false, $context);
                return json_decode($response);
            } catch (Exception $e) {
                return new Error($e);
            }
        }
    }

    function Redirect($url, $permanent = false){
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }


    // Скрипт для локализации страниц
    $localePreferences = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    if(is_array($localePreferences) && count($localePreferences) > 0) {
        $browserLocale = $localePreferences[0];
        $_SESSION['browser_locale'] = $browserLocale;
    }

    // Подключаемся к базе данных системного интегрированного приложения "Discord bot 'Simplex'"
    $env = parse_ini_file("$root/.env");
    $db_simplex = mysqli_connect(
        $env["MYSQL_SIMPLEX_HOST"],
        $env["MYSQL_SIMPLEX_USER"],
        $env["MYSQL_SIMPLEX_PASSWORD"],
        $env["MYSQL_SIMPLEX_DATABASE"],
        $env["MYSQL_SIMPLEX_PORT"]
    );


    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

?>