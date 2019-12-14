<?php


$users[13] = [
    'name' => 'Pascal',
    'email' => 'Pascal@gmail.com',
    'lang' => 'ru',

];

$users[4] = [
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

$users[61] = [
    'name' => 'Liza',
    'email' => 'Liza@gmail.com',
    'lang' => 'de',
];

echo 'Количество пользователей сайта: ' . count($users) . '</br>';

$MaxUserId = 0;
foreach ($users as $userId => $userInfo) {
    if ($MaxUserId < $userId) {
        $MaxUserId = $userId;
    }
}

$MinUserId = $MaxUserId;
foreach ($users as $userIdMin => $userInfo) {
    if ($MinUserId > $userIdMin) {
        $MinUserId = $userIdMin;
    }
}

echo 'Пользователь с максимальным ID - ' . $MaxUserId . '</br>';
echo 'Пользователя с минимальным ID - ' . $MinUserId . '</br>';

$prevMaxUser = null;
$prevMaxUserId = null;
foreach ($users as $userId => $user) {
    if ($MaxUserId == $userId) {
        break;
    }
    $prevMaxUser = $user;
    $prevMaxUserId = $userId;
}


var_dump($prevMaxUserId);
//var_dump($prevMaxUser);

$arrayKeys = (array_keys($users));

foreach ($arrayKeys as $key => $userId) {
    if($userId == $MinUserId){
        $userIdMinIndex = $key+1;
    }
};

$nextMinUserId = $arrayKeys[$userIdMinIndex];
$nextMinUser = $users[$nextMinUserId];

var_dump($nextMinUserId, $nextMinUser);

?>