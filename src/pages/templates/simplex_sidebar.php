<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $localization, $browserLocale, $env;


?>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-secondary position-fixed top-0 vh-100 not_active border-end z-3" id="sidebar">
    <a href="/simplex" class="d-flex align-items-center mb-0 me-md-auto text-decoration-none">
        <img class="bi pe-none me-2 rounded-circle" width="32" height="32" src="/src/assets/images/simplex_icon.png" alt="Logo">
        <span class="fs-4">
            <?php
                error_reporting(0);
                $result = $localization->simplex->sidebar->title->{$browserLocale};
                if (!$result) echo $localization->simplex->sidebar->title->{"eu-US"};
                else echo $result;
            ?>
        </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto w-100">
        <li class="nav-item">
            <button hx-get="/src/pages/templates/simplex_index" hx-target="main" hx-select="" class="btn nav-link d-flex align-items-center w-100 active" aria-current="page">
                <div class="me-2 d-flex align-items-center"><?php include "$root/src/assets/images/bootstrap/icons/house.svg"?></div>
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->sidebar->nav_links->main->{$browserLocale};
                    if (!$result) echo $localization->simplex->sidebar->nav_links->main->{"eu-US"};
                    else echo $result;
                ?>
            </button>
        </li>
        <li>
            <button hx-get="/src/pages/templates/documents/simplex_docs" hx-target="main" class="btn nav-link d-flex align-items-center w-100">
                <div class="me-2 d-flex align-items-center"><?php include "$root/src/assets/images/bootstrap/icons/code-slash.svg"?></div>
                <?php
                error_reporting(0);
                $result = $localization->simplex->sidebar->nav_links->docs->{$browserLocale};
                if (!$result) echo $localization->simplex->sidebar->nav_links->docs->{"eu-US"};
                else echo $result;
                ?>
            </button>
        </li>
        <li>
            <button hx-get="/src/pages/templates/documents/<?php echo getLocate($browserLocale); ?>/simplex_privacy" hx-target="main" class="btn nav-link d-flex align-items-center w-100">
                <div class="me-2 d-flex align-items-center"><?php include "$root/src/assets/images/bootstrap/icons/file-text.svg"?></div>
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->sidebar->nav_links->privacy->{$browserLocale};
                    if (!$result) echo $localization->simplex->sidebar->nav_links->privacy->{"eu-US"};
                    else echo $result;
                ?>
            </button>
        </li>
        <li>
            <button hx-get="/src/pages/templates/documents/<?php echo getLocate($browserLocale); ?>/simplex_terms" hx-target="main" class="btn nav-link d-flex align-items-center w-100">
                <div class="me-2 d-flex align-items-center"><?php include "$root/src/assets/images/bootstrap/icons/file-text.svg"?></div>
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->sidebar->nav_links->terms->{$browserLocale};
                    if (!$result) echo $localization->simplex->sidebar->nav_links->terms->{"eu-US"};
                    else echo $result;
                ?>
            </button>
        </li>
        <li>
    </ul>
    <hr>
    <div class="dropdown my-2 w-100">
        <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="true">
            <?php include "$root/src/assets/images/bootstrap/icons/translate.svg" ?>
        </button>
        <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 40px);" data-popper-placement="bottom-start">
            <li><h6 class="dropdown-header">
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->sidebar->buttons->translate->{$browserLocale};
                        if (!$result) echo $localization->simplex->sidebar->buttons->translate->{"eu-US"};
                        else echo $result;
                    ?>
                </h6></li>
            <li><a class="dropdown-item" href="/lang?set=ru-RU"> <img alt="" width="16px" src="/src/assets/images/flags/48px/russia_icon.png"> Русский</a></li>
            <li><a class="dropdown-item" href="/lang?set=eu-US"> <img alt="" width="16px" src="/src/assets/images/flags/48px/kingdom_united_icon.png"> English</a></li>
<!--            <li><hr class="dropdown-divider"></li>-->
<!--            <li><a class="dropdown-item" href="#">Separated link</a></li>-->
        </ul>
    </div>

    <button type="button" class="btn btn-secondary" id="btn_theme_switch">
        <?php include "$root/src/assets/images/bootstrap/icons/moon-stars.svg" ?>
    </button>
<!--    <div class="dropdown">-->
<!--        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">-->
<!--            <strong>mdo</strong>-->
<!--        </a>-->
<!--        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">-->
<!--            <li><a class="dropdown-item" href="#">New project...</a></li>-->
<!--            <li><a class="dropdown-item" href="#">Settings</a></li>-->
<!--            <li><a class="dropdown-item" href="#">Profile</a></li>-->
<!--            <li><hr class="dropdown-divider"></li>-->
<!--            <li><a class="dropdown-item" href="#">Sign out</a></li>-->
<!--        </ul>-->
<!--    </div>-->
</div>

    <script src="/src/js/sidebar.js"></script>