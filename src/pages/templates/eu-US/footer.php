<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $env;

?>
<footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="mb-0">
        <p>© <?php echo date("Y"); ?> Kirill Guchkov | A MasterCont Server</p>
        <a type="button" class="btn btn-secondary" href="<?php echo $env["LICENSE_GPL"]; ?>">License GPL</a>
    </div>


    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link px-2">Home</a></li>
        <li class="nav-item"><a href="https://getbootstrap.com/" class="nav-link px-2">We use bootstrap!</a></li>
        <li class="nav-item"><a href="https://htmx.org/" class="nav-link px-2">And we also use HTMX!</a></li>
    </ul>
</footer>