<?php

    include __DIR__.'/vendor/autoload.php';

    use Discord\Discord;
    use Discord\Parts\Channel\Message;
    use Discord\WebSockets\Intents;
    use Discord\WebSockets\Event;

try {
    $discord = new Discord([
        'token' => 'bot-token',
        'intents' => Intents::getDefaultIntents()
        //      | Intents::MESSAGE_CONTENT, // Note: MESSAGE_CONTENT is privileged, see https://dis.gd/mcfaq
    ]);
} catch (\Discord\Exceptions\IntentException $e) {

}
