<?php
$data = "31-12-2020";
$RData = str_replace(array("31-12-2020"), array("2020.12.31"), $data);
echo $RData . '</br>';

echo $country = 'london is the capital of great britain' . '</br>';
echo "</br>";
echo $country = ucwords($country) . '</br>';

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
$str = "1a2b3c4b5d6e7f8g9h0";
$str = preg_replace('/[0-9]+/', '', $str);
echo $str;
?>