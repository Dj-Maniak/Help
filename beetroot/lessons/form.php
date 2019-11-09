<?php
$login = $_POST['login'];
$password = $_POST['password'];


$text = fopen("test.txt", "r");
$array = null;
if ($text) {
    while (($buffer = fgets($text)) !== false) {
        $array[] = explode(' ', $buffer);
    }
    fclose($text); //Закрытие файла
}


foreach ($array as $value){
    $LoginComparison = $value[0];
    $PasswordComparison = $value[1];

    if(trim($login) === trim($LoginComparison) and trim($password) === trim($PasswordComparison)){
        echo "Ваш логин: $login";
        $fp = fopen($login .".txt", "w"); // Создает новый файл в режиме записи
        $mytext = "Для наглядности"; // Исходная строка
        fputs($fp, $mytext); // Запись в файл
       fclose($fp); //Закрытие файлає
    }
    else
    {

    };
};



?>