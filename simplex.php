<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $env = parse_ini_file(".env");
    require_once "php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы

    if ($_SERVER['HTTP_HOST'] === $env["LOCAL_HTTP_HOST_SERVER"]) {
        $mrcont_root = "http://localhost";
    } else {
        $mrcont_root = "https://{$env["GLOBAL_HTTP_HOST"]}";
    }

    global $browserLocale;
?>

<!DOCTYPE html>
<html lang="ru"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="0842efd0de3f9518" />
    <title>Simplex - Discord bot</title>
    <link rel="stylesheet" href="<?php echo $mrcont_root; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo $mrcont_root; ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo $mrcont_root; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $mrcont_root; ?>/css/index.css">
    <link rel="shortcut icon" href="<?php echo $mrcont_root; ?>/content/icons/home.ico" type="image/x-icon">
</head>
<body>
<!--    --><?php
//        if ($browserLocale === "ru-RU") include "$mrcont_root/pages/templates/ru-RU/nav.php";
//        else include "$mrcont_root/pages/templates/en-US/nav.php";
//        // Подключаем навигацию
//    ?>
    <?php
        if ($browserLocale === "ru-RU") include "$root/pages/templates/ru-RU/simplex.php";
        else include "$root/pages/templates/en-US/simplex.php";
        // Подключаем контент главной страницы
    ?>
<!--    --><?php
//        if ($browserLocale === "ru-RU") include "$mrcont_root/pages/templates/ru-RU/footer.php";
//        else include "$mrcont_root/pages/templates/en-US/footer.php";
//        // Подключаем футер
//    ?>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>
