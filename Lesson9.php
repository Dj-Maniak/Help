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

$users[24] = [
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

$users[43] = [
    'name' => 'Pascal',
    'email' => 'Pascal@gmail.com',
    'lang' => 'ru',
];

$users[52] = [
    'name' => 'Lucas',
    'email' => 'Lucas@gmail.com',
    'lang' => 'en',
];

$users[55] = [
    'name' => 'Nathan',
    'email' => 'Nathan@gmail.com',
    'lang' => 'ua',
];

$users[63] = [
    'name' => 'Tom',
    'email' => 'Tom@gmail.com',
    'lang' => 'fr',
];

$users[71] = [
    'name' => 'Lizaz',
    'email' => 'Liza@gmail.com',
    'lang' => 'de',
];


$ValueUsers = array_values($users);

/*
echo "<pre>";
var_dump($ValueUsers);
echo "</pre>";
*/

$OneUserId = ($ValueUsers[0]);
$EndUserId = end($ValueUsers);

/*
var_dump($OneUserId['lang']);
var_dump($EndUserId['lang']);
*/

if ($OneUserId['lang'] == $EndUserId['lang']) {
    echo "<h1>Добрых времени суток</h1>";
} else {
    echo "<h1>Добрых времени суток</h1>";
    echo "<h1>Gute Tageszeit</h1>";
}
?>