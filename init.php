<?php

function start() {
    include('vendor/autoload.php');
    include('TelegramBot.php');

    $phrases = ['Сдай лабу падло!', 'Я всім вам виставлю оцінки', 'Яку лабу уже робите?', 'Скоро сессія..', 'Воронков, я тебе в армію отправлю', 'Абанін, сядь за першу парту', 'На першій парти герої )',
        'Проблем немає?', 'у кого які проблеми?', 'Кому це не треба можете вийти', 'Ви сюда вчиться прийшли чи говорити?!', 'Де конспект?', 'Домашнє завдання кожному: вивести printf Левківський на экран. У кого не буде зроблено - відрахую!',
    'Де ваші лабораторні?', 'У кого є якісь питання - задавайте.', 'Я на одну хвилинку відійду..', 'Староста де журнал ?!'];
    $size = count($phrases);
    $index = rand(0, $size);

    $telegramApi = new TelegramBot();

    $updates = $telegramApi->getUpdates();

    foreach ($updates as $update) {

        $telegramApi->sendMessage( $phrases[$index], $update->message->chat->id);
        return 0;
    }
    return 0;
}

sleep(5);
start();