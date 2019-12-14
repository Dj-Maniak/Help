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




if (($users[13]['lang']) == ($users[55]['lang'])){
    echo 'Добрый день!!!';
}
else{
    echo 'Добрый день!!!'. '</br>';
    echo 'Guten Tag!!!';
}

?>
