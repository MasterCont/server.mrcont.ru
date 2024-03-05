<?php

    interface iDiscordBot{
        public function getDiscordBot(?string $id, ?string $token);
    }

    class DiscordBot implements iDiscordBot{

        public function getDiscordBot(?string $id, ?string $token)
        {
            $DISCORD_HTTP_AUTH = "https://discord.com/api/v10/users";
            $DISCORD_BOT_ID = $id;
            $DISCORD_BOT_TOKEN = $token;

            // Create a stream
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Accept-language: en\r\n" .
                        'Authorization: Bot '.$DISCORD_BOT_TOKEN
                )
            );

            $context = stream_context_create($opts);

            $url = "$DISCORD_HTTP_AUTH/$DISCORD_BOT_ID";

            try {
                $response = file_get_contents($url, false, $context);
                return json_decode($response);
            } catch (Exception $e) {
                return new Error($e);
            }
        }
    }


    //Example
    $bot = new DiscordBot();
    $result = $bot->getDiscordBot("1126582306203779082", "token");
    var_dump($result); // Object

    echo "Name: $result->username"; // Bot username
