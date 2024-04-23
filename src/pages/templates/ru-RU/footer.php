<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $env;

?>
<footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="mb-0">
        <p>© <?php echo date("Y"); ?> Кирилл Гучков | MasterCont Сервер</p>
        <ul class="nav justify-content-start py-3">
            <li class="nav-item me-2">
                <a type="button" class="btn btn-secondary" href="<?php echo $env["LICENSE_GPL"]; ?>">Лицензия GPL</a>
            </li>
            <li class="nav-item me-2">
                <a type="button" class="btn btn-warning d-flex align-items-center" href="<?php echo $env["DONATION"]; ?>">
                    <div class="icon me-2 d-flex justify-content-center align-items-center">
                        <?php include "$root/src/assets/images/bootstrap/icons/cash.svg"; ?>
                    </div>
                    Поддержать проект
                </a>
            </li>
            <li class="nav-item me-2">
                <a type="button" class="btn btn-dark d-flex align-items-center" href="<?php echo $env["APP_SOURCE_CODE"] ?>">
                    <div class="icon me-2 d-flex justify-content-center align-items-center">
                        <?php include "$root/src/assets/images/bootstrap/icons/github.svg"; ?>
                    </div>
                    Исходный код
                </a>
            </li>
        </ul>
    </div>


    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link px-2">Главная</a></li>
        <li class="nav-item"><a href="https://getbootstrap.com/" class="nav-link px-2">Мы используем bootstrap!</a></li>
        <li class="nav-item"><a href="https://htmx.org/" class="nav-link px-2">Так же используем HTMX!</a></li>
    </ul>
</footer>