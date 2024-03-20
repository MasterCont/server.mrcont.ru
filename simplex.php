<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $env = parse_ini_file("$root/.env");
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы

    if ($_SERVER['HTTP_HOST'] === $env["LOCAL_HTTP_HOST_SERVER"]) {
        $mrcont_root = "http://www.localhost";
        $server_root = "/";
    } else {
        $mrcont_root = "https://{$env["GLOBAL_HTTP_HOST"]}";
        $server_root = $root;
    }

    global $browserLocale;
?>

<!DOCTYPE html>
<html lang="ru"
    <?php
        error_reporting(0);
        if ($_COOKIE["data_theme"]) echo "data-bs-theme='{$_COOKIE["data_theme"]}'";
        else echo "data-bs-theme='light'";
    ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="0842efd0de3f9518" />
    <title>Simplex - Discord bot</title>
    <link rel="stylesheet" href="/src/css/reset.css">
    <link rel="stylesheet" href="/src/css/fonts.css">
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/sidebars.css">
    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="shortcut icon" href="src/assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
        error_reporting(0);
        if ($_GET["document"]) {
            include "$root/src/pages/templates/documents/simplex_{$_GET["document"]}.php";
        }
        else include "$root/src/pages/templates/simplex_index.php";
        // Подключаем контент главной страницы
    ?>
    <?php include "$root/src/pages/templates/simplex_sidebar.php"; ?>
    <?php include "$root/src/pages/templates/footers/simplex_footer.php"; ?>
    <?php include "$root/src/pages/templates/footer.php"; // Подключаем футер ?>
</body>
    <script src="https://unpkg.com/htmx.org@1.9.11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/src/js/bootstrap.js"></script>
    <script src="/src/js/main.js"></script>
</html>
