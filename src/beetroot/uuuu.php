<?php


$users[13] = [
    'name' => 'Pascal',
    'email' => 'Pascal@gmail.com',
    'lang' => 'ru',

];

$users[22] = [
    'name' => 'Lucas',
    'email' => 'Lucas@gmail.com',
    'lang' => 'en',
];

$users[55] = [
    'name' => 'Nathan',
    'email' => 'Nathan@gmail.com',
    'lang' => 'ua',
];

$users[33] = [
    'name' => 'Tom',
    'email' => 'Tom@gmail.com',
    'lang' => 'fr',
];

$users[41] = [
    'name' => 'Liza',
    'email' => 'Liza@gmail.com',
    'lang' => 'de',
];

//Ищем максимальный ID
$maxUserId = 0;


foreach ($users as $userId => $user) {
    if ($userId > $maxUserId) {
        $maxUserId = $userId;
    }
}

// В итоге $maxUserId = 55
// нам нужен предидущий максимальному ID

$prevMaxUser = null;
$prevMaxUserId = null;
foreach ($users as $userId => $user) {
    if ($maxUserId == $userId) {
       // break;
    }
    $prevMaxUser = $user;
    $prevMaxUserId = $userId;
}

var_dump($prevMaxUserId);
var_dump($prevMaxUser);