<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы
    require_once "$root/src/php/simplex_additionally/slash_command.php";
    global $localization, $browserLocale, $db_simplex, $env;

    $slash_command = new slash_command();
    $table_commands = $db_simplex->query("SELECT * FROM ".$env['MYSQL_SIMPLEX_TABLE_COMMANDS_LIST'].";");

    function getLocate($default_locate){
        global $locates;
        for ($i = 0; $i < count($locates); $i++){
         if ($locates[$i] === $default_locate) return $default_locate;
        }
        return $locates[0]; // eu-US
    }

    getLocate($browserLocale);

?>

<main class="d-flex">
    <section id="under_sidebar" class="min-vh-100   ">
        <div class="flex-shrink-0 p-3" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                <?php include "$root/src/assets/images/bootstrap/icons/code-slash.svg"?>
                <span class="fs-5 fw-semibold mx-2">
                    <?php
                        error_reporting(0);
                        $result = $localization->simplex->sidebar->nav_links->docs->{$browserLocale};
                        if (!$result) echo $localization->simplex->sidebar->nav_links->docs->{"eu-US"};
                        else echo $result;
                    ?>
                </span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        <?php
                            error_reporting(0);
                            $result = $localization->simplex->docs->under_sidebar->toggles->getting_started->title->{$browserLocale};
                            if (!$result) echo $localization->simplex->docs->under_sidebar->toggles->getting_started->title->{"eu-US"};
                            else echo $result;
                        ?>
                    </button>

                    <div class="collapse" id="home-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><button hx-get='/src/pages/templates/sections/simplex_docs/<?php echo getLocate($browserLocale); ?>/overview' hx-target='#content' onclick="//addGETVars([{name: `toggle`, value: `<?php echo $localization->simplex->docs->under_sidebar->toggles->getting_started->id ?>`}, {name: 'section', value: 'overview'}, {name: `slash_command`, value: false}])" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                    <?php
                                        error_reporting(0);
                                        $result = $localization->simplex->docs->under_sidebar->toggles->getting_started->links->overview->{$browserLocale};
                                        if (!$result) echo $localization->simplex->docs->under_sidebar->toggles->getting_started->links->overview->{"eu-US"};
                                        else echo $result;
                                    ?>
                                </button>
                            </li>
                            <li><button hx-get='/src/pages/templates/sections/simplex_docs/<?php echo getLocate($browserLocale); ?>/adding' hx-target='#content' onclick="//addGETVars([{name: `toggle`, value: `<?php echo $localization->simplex->docs->under_sidebar->toggles->getting_started->id ?>`}, {name: 'section', value: 'adding'}, {name: `slash_command`, value: false}])" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                    <?php
                                        error_reporting(0);
                                        $result = $localization->simplex->docs->under_sidebar->toggles->getting_started->links->adding->{$browserLocale};
                                        if (!$result) echo $localization->simplex->docs->under_sidebar->toggles->getting_started->links->adding->{"eu-US"};
                                        else echo $result;
                                    ?>
                                </button>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <?php
                            error_reporting(0);
                            $result = $localization->simplex->docs->under_sidebar->toggles->slash_commands->title->{$browserLocale};
                            if (!$result) echo $localization->simplex->docs->under_sidebar->toggles->slash_commands->title->{"eu-US"};
                            else echo $result;
                        ?>
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <?php

                            foreach ($table_commands as $row){
                                echo "<li><button hx-get='/src/pages/templates/sections/simplex_docs/slash_command?section={$row["name"]}&slash_command=true' hx-target='#content' onclick='//addGETVars([{name: `toggle`, value: `{$localization->simplex->docs->under_sidebar->toggles->slash_commands->id}`}, {name: `section`, value: `{$row["name"]}`}, {name: `slash_command`, value: true}])'  class='link-body-emphasis d-inline-flex text-decoration-none rounded'>{$row["name"]}</button></li>";
                            }

                            ?>
                        </ul>
                    </div>
                </li>
        <!--    <li class="border-top my-3"></li>--> <!-- The border line -->
            </ul>
        </div>
    </section>
    <section class="min-vh-100 bg-body-tertiary w-100">
        <div id="content" class="p-5 mb-4 bg-body-tertiary rounded-3 w-100">
            <?php
                include "$root/src/pages/templates/sections/simplex_docs/".getLocate($browserLocale)."/overview.php";
            ?>
        </div>
    </section>
</main>
