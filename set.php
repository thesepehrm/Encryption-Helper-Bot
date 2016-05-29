<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '222942975:AAFGKCSwpSK9-_PBwGInkWSzPPSQrpq_SJw';
$BOT_NAME = 'encrypbot';
$hook_url = 'https://encbot.herokuapp.com/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);

    // Uncomment to use certificate
    //$result = $telegram->setWebHook($hook_url, $path_certificate);

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
