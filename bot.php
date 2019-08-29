<?php

$output = json_decode(file_get_contents('php://input'), true);
$id = $output['message']['chat']['id'];
$token = '934474930:AAECA_C5ZgHjTAQwz_3zrTJxIx6ZiNuOmcg';
$message = $output['message']['text'];
$photo = 'https://dev.aka-root.com/psycho-bot/image.jpg';
$caption = 'Что вы видите на картинке?';

function sendMessage($token, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=$message");
}

function sendPhoto ($token, $id, $photo)
{
    file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$id&photo=$photo");
}

switch ($message) {

    case '/start':
        $message = 'Что вы видите на картинке?';
        sendMessage($token, $id, $message);
        sendPhoto($token, $id, $photo);
        break;
    case strpos($message, 'клякс') !== false;
        $message = "А вы молодец.";
        sendMessage($token, $id, $message);
        break;
    case stripos($message, 'пятн') !== false;
        $message = "А вы молодец.";
        sendMessage($token, $id, $message);
        break;
    default:
        $message = 'Это клякса, так и запишу, что вы сумасшедший.';
        sendMessage($token, $id, $message);
}

