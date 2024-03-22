<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $env;
?>

<footer class="container">
    <ul class="nav justify-content-start py-3 border-bottom">
        <li class="nav-item">
            <a type="button" class="btn btn-warning d-flex align-items-center" href="<?php echo $env["DONATION"]; ?>">
                <div class="icon me-2 d-flex justify-content-center align-items-center">
                    <?php include "$root/src/assets/images/bootstrap/icons/cash.svg"; ?>
                </div>
                To support the project
            </a>
        </li>
    </ul>
</footer>
