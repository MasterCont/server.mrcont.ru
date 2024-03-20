<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/src/php/handler.php"; // Импорт файла-обработчика, в котором прописаны объекты и методы

    interface iSlash_command_tables {
        public function slash_command_table_get(?object $command): void;
        public function slash_command_options_table_get(?object $options): void;
    }

    class slash_command implements iSlash_command_tables {

        public function getValue($value){
            error_reporting(0);
            global $localization, $browserLocale;
            $result = $localization->simplex->docs->content->slash_command_tables->{$value}->{$browserLocale};
            if (!$result) $result = $localization->simplex->docs->content->slash_command_tables->{$value}->{'eu-US'};
            return $result;
        }

        public function slash_command_table_get(?object $command): void
        {
            foreach ($command as $item){
                echo "
                    <div class='table-responsive small'>
                        <table class='table table-striped table-sm'>
                          <thead>
                            <tr>
                              <th scope='col'>". $this->getValue('id') ."</th>
                              <th scope='col'>". $this->getValue('name') ."</th>
                              <th scope='col'>". $this->getValue('default_permission') ."</th>
                              <th scope='col'>". $this->getValue('default_member_permissions') ."</th>
                              <th scope='col'>". $this->getValue('dm_permission') ."</th>
                              <th scope='col'>". $this->getValue('nsfw') ."</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{$item["id"]}</td>
                              <td>{$item["name"]}</td>
                              <td>{$item["default_permission"]}</td>
                              <td>{$item["default_member_permissions"]}</td>
                              <td>{$item["dm_permission"]}</td>
                              <td>{$item["nsfw"]}</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                                ";
            }
        }

        public function slash_command_options_table_get($options): void
        {
            global $localization, $browserLocale;
            echo "<div class='table-responsive smallme-2'><table class='table table-striped table-sm mw-100 me-2'><thead>
                            <tr>
                              <th scope='col'>".$this->getValue('name')."</th>
                              <th scope='col'>".$this->getValue('type')."</th>
                              <th scope='col'>".$this->getValue('required')."</th>
                              <th scope='col'>".$this->getValue('description')."</th>
                            </tr>
                          </thead>";

            foreach ($options as $option){
                $description_localizations = $option->description_localizations;
                if ($browserLocale === "ru-RU") $description = $description_localizations->ru;
                else $description = $option->description;
                echo "<tbody><tr><td>{$option->name}</td><td>{$option->type}</td><td>{$option->required}</td><td>{$description}</td></tr></tbody>";
            }

            echo "</table></div>";
        }
    }


    function slash_command_description_get($command, $browserLocale): void
    {
        foreach ($command as $item) {
            $description_localizations = json_decode($item["description_localizations"]);

            try {
                if ($browserLocale === "ru-RU") $result = $description_localizations->ru;
                else $result = $item["description"];
            } catch (Exception $err){
                $result = $item["description"];
            }


            echo "<h2 class='lead my-3'>$result</h2>";
        }
    }

function slash_command_options_get($command, $browserLocale): void{
    global $localization;
    foreach ($command as $item) {
        $options = json_decode($item["options"]);
        if ($options) {
            error_reporting(0);
            $result = $localization->simplex->docs->content->options_title->{$browserLocale};
            if (!$result) $result = $localization->simplex->docs->content->options_title->{'eu-US'};

            echo "<h3 class='h3'>$result</h3>";
            $slash_command = new slash_command();
            $slash_command->slash_command_options_table_get($options);
        }
        else return;
    }
}