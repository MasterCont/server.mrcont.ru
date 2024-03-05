<?php

try {
    // Подключаемся к базе данных системного интегрированного приложения "Discord bot 'Simplex'"
    $env = parse_ini_file(".env");
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

    $table_messages = $db_simplex->query("SELECT * FROM `".$env['MYSQL_SIMPLEX_TABLE_MESSAGES']."`;");
    $table_reports = $db_simplex->query("SELECT * FROM `".$env['MYSQL_SIMPLEX_TABLE_REPORTS']."`;");
} catch (Exception $err) {
    echo $err;
}

//    var_dump($table_messages);

?>

<main class="discord_bg_2">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary index text-white">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold fadeIn fadeAnimationDown">Приложение для людей</h1>
            <h3 class="fw-normal text-white mb-3 fadeIn fadeAnimationDown">Интегрированное системное приложение, основанное на платформе Discord</h3>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary" onclick="window.location.href='https://discord.com/api/oauth2/authorize?client_id=1126582306203779082&permissions=8&scope=bot%20applications.commands'" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"></path>
                    </svg>
                    Добавить приложение
                </button>
                <button type="button" class="btn btn-secondary btn-lg px-4" onclick="window.location.href='<?php echo $env['DISCORD_SERVER_DEFAULT_INVITE_LINK']; ?>'" >Сервер разработчика</button>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden w-100 fadeIn fadeAnimationUp">
            <div class="my-3 py-3">
                <h2 class="display-5">Пользовательские команды</h2>
                <p class="lead">Со множеством скрытых действий по модерации.</p>
            </div>
            <img src="/assets/images/simplex_product_img1.png" class="p-3" width="300" height="300" alt="">
        </div>
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden w-100 fadeIn fadeAnimationUp">
            <div class="my-3 p-3">
                <h2 class="display-5">Аудит сообщений</h2>
                <p class="lead">При желании мы сохраняем сообщения пользователей в базе данных для наших администраторов и модераторов.</p>
            </div>
            <div>
                <h1>
                    Мы уже сохранили <mark class="badge bg-primary">
                        <?php
                            if ($table_messages) echo $table_messages->num_rows;
                            else echo "MANY";
                        ?>
                    </mark> пользовательских сообщений в базе данных.
                </h1>
            </div>
        </div>
    </div>
</main>
