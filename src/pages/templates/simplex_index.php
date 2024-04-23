<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    global $localization, $browserLocale, $db_simplex, $env;

try {
    $table_messages = $db_simplex->query("SELECT * FROM ".$env['MYSQL_SIMPLEX_TABLE_MESSAGES'].";");
    $table_reports = $db_simplex->query("SELECT * FROM ".$env['MYSQL_SIMPLEX_TABLE_REPORTS'].";");
    $table_commands = $db_simplex->query("SELECT * FROM ".$env['MYSQL_SIMPLEX_TABLE_COMMANDS_LIST']." WHERE `active` = 1;");
} catch (Exception $err) {
    echo $err;
}

//    var_dump($table_messages);

?>

<main id="main">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary index text-white min-vh-50 d-flex justify-content-center align-items-center">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold fadeIn fadeAnimationDown">
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->main->title->{$browserLocale};
                    if (!$result) echo $localization->simplex->main->title->{"eu-US"};
                    else echo $result;
                ?>
            </h1>
            <h3 class="fw-normal mb-3 fadeIn fadeAnimationDown">
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->main->{"under-title"}->{$browserLocale};
                    if (!$result) echo $localization->simplex->main->{"under-title"}->{"eu-US"};
                    else echo $result;
                ?>
            </h3>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary" onclick="window.location.href='https://discord.com/api/oauth2/authorize?client_id=1126582306203779082&permissions=8&scope=bot%20applications.commands'" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"></path>
                    </svg>
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->buttons->button_add->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->buttons->button_add->{"eu-US"};
                        else echo $result;
                    ?>
                </button>
                <button type="button" class="btn btn-secondary btn-lg px-4" onclick="window.location.href='<?php echo $env['DISCORD_SERVER_DEFAULT_INVITE_LINK']; ?>'" >
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->buttons->{"button_dev-server"}->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->buttons->{"button_dev-server"}->{"eu-US"};
                        else echo $result;
                    ?>
                </button>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="bg-body-tertiary d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="me-md-3 py  -2 px-3 px-md-5 text-center overflow-hidden w-100 fadeIn fadeAnimationUp">
            <div class="my-3 py-3">
                <h2 class="display-5">
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->products->{"1"}->title->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->products->{"1"}->title->{"eu-US"};
                        else echo $result;
                    ?>
                </h2>
                <p class="lead">
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->products->{"1"}->description->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->products->{"1"}->description->{"eu-US"};
                        else echo $result;
                    ?>
                </p>
            </div>
<!--            <img src="/src/assets/images/simplex_product_img1.png" class="p-3" width="300" height="300" alt="">-->
            <h1>
                <?php
                    error_reporting(0);
                    $result = $localization->simplex->main->products->{"1"}->additionally->{"1"}->{$browserLocale};
                    if (!$result) echo $localization->simplex->main->products->{"1"}->additionally->{"1"}->{"eu-US"};
                    else echo $result;
                ?>
                <mark class="badge bg-primary">
                    <?php
                        if ($table_commands) echo $table_commands->num_rows;
                        else echo "MANY";
                    ?>
                </mark>
                <?php
                error_reporting(0);
                $result = $localization->simplex->main->products->{"1"}->additionally->{"2"}->{$browserLocale};
                if (!$result) echo $localization->simplex->main->products->{"1"}->additionally->{"2"}->{"eu-US"};
                else echo $result;
                ?>
            </h1>
        </div>
        <div class="me-md-3 py-2 px-3  px-md-5 text-center overflow-hidden w-100 fadeIn fadeAnimationUp">
            <div class="my-3 p-3">
                <h2 class="display-5">
                    <?php
                    error_reporting(0);
                    $result = $localization->simplex->main->products->{"2"}->title->{$browserLocale};
                    if (!$result) echo $localization->simplex->main->products->{"2"}->title->{"eu-US"};
                    else echo $result;
                    ?>
                </h2>
                <p class="lead">
                    <?php
                    error_reporting(0);
                    $result = $localization->simplex->main->products->{"2"}->description->{$browserLocale};
                    if (!$result) echo $localization->simplex->main->products->{"2"}->description->{"eu-US"};
                    else echo $result;
                    ?>
                </p>
            </div>
            <div>
                <h1>
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->products->{"2"}->additionally->{"1"}->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->products->{"2"}->additionally->{"1"}->{"eu-US"};
                        else echo $result;
                    ?>
                    <mark class="badge bg-primary">
                        <?php
                            if ($table_messages) echo $table_messages->num_rows;
                            else echo "MANY";
                        ?>
                    </mark>
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->main->products->{"2"}->additionally->{"2"}->{$browserLocale};
                        if (!$result) echo $localization->simplex->main->products->{"2"}->additionally->{"2"}->{"eu-US"};
                        else echo $result;
                    ?>
                </h1>
            </div>
        </div>
    </div>
</main>
