<?php

//  - в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'.

$data = '31-12-2020';
$ExplodeData = explode('-', $data);
echo $ExplodeData[2] . '.' . $ExplodeData[1] . '.' . $ExplodeData[0];
die;

/*  - дана строка 'london is the capital of great britain'.
Сделайте из нее строку 'London Is The Capital Of Great Britain'*/

echo $country = 'london is the capital of great britain' . '</br>';
echo "</br>";
echo $country = ucwords($country) . '</br>';

/* - дана переменная $password, в которой хранится пароль пользователя. Если количество
символов пароля больше 7 и меньше 12, то выведите пользователю сообщение о том, что пароль
подходит, иначе: сообщение о том, что нужно придумать другой пароль. */

$password = '123456789';
$count = mb_strlen($password);
echo $count . '</br>';
$i = 7;
$j = 12;
if ($count > $i and $count < $j) {
    echo 'Пароль подходит' . "</br>";
} else {
    echo 'Придумайте другой пароль' . "</br>";
};

/* - дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh' */

$str = "1a2b3c4b5d6e7f8g9h0";
$str = preg_replace('/[0-9]+/', '', $str);
echo $str;

?>